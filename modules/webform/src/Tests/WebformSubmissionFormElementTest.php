<?php

namespace Drupal\webform\Tests;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Core\Session\AccountInterface;
use Drupal\user\Entity\User;
use Drupal\webform\Entity\Webform;
use Drupal\webform\Utility\WebformElementHelper;

/**
 * Tests for webform submission webform element.
 *
 * @group Webform
 */
class WebformSubmissionFormElementTest extends WebformTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = ['filter', 'node', 'webform'];

  /**
   * Webforms to load.
   *
   * @var array
   */
  protected static $testWebforms = [
    'test_element_validate',
    'test_element_ignored_properties',
    'test_element_invalid',
    'test_element_autocomplete',
    'test_element_entity_reference',
    'test_element_text_format',
    'test_form_properties',
    'test_form_buttons',
  ];

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();

    // Create users.
    $this->createUsers();
  }

  /**
   * Tests elements.
   */
  public function testElements() {
    global $base_path;

    /* Test validate element #minlength and #unique property */

    $this->drupalLogin($this->adminWebformUser);

    $webform_validate = Webform::load('test_element_validate');

    // Check minlength validation.
    $this->postSubmission($webform_validate, ['minlength_textfield' => 'X'], t('Submit'));
    $this->assertRaw('<em class="placeholder">minlength_textfield</em> cannot be less than <em class="placeholder">5</em> characters but is currently <em class="placeholder">1</em> characters long.');

    // Check #unique validation only allows one unique 'value' to be submitted.
    $sid = $this->postSubmission($webform_validate, [], t('Submit'));
    $this->assertNoRaw('The value <em class="placeholder">value</em> has already been submitted once for the <em class="placeholder">unique_textfield</em> element. You may have already submitted this webform, or you need to use a different value.');
    $this->drupalPostForm('webform/test_element_validate', [], t('Submit'));
    $this->assertRaw('The value <em class="placeholder">value</em> has already been submitted once for the <em class="placeholder">unique_textfield</em> element. You may have already submitted this webform, or you need to use a different value.');

    // Check #unique element can be updated.
    $this->drupalPostForm("admin/structure/webform/manage/test_element_validate/submission/$sid/edit", [], t('Save'));
    $this->assertNoRaw('The value <em class="placeholder">value</em> has already been submitted once for the <em class="placeholder">unique_textfield</em> element. You may have already submitted this webform, or you need to use a different value.');
    // @todo Determine why test_element_unique is not updating correctly during
    // testing.
    // $this->assertRaw('Submission updated in <em class="placeholder">Test: Element: Unique</em>.');

    /* Test invalid elements */

    // Check invalid elements .
    $this->drupalGet('webform/test_element_invalid');
    $this->assertRaw('Unable to display this webform. Please contact the site administrator.');

    /* Test ignored properties */

    // Check ignored properties.
    $webform_ignored_properties = Webform::load('test_element_ignored_properties');
    $elements = $webform_ignored_properties->getElementsInitialized();
    foreach (WebformElementHelper::$ignoredProperties as $ignored_property) {
      $this->assert(!isset($elements['test'][$ignored_property]), new FormattableMarkup('@property ignored.', ['@property' => $ignored_property]));
    }

    /* Test #autocomplete_items element property */

    // Check routes data-drupal-selector.
    $this->drupalGet('webform/test_element_autocomplete');
    $this->assertRaw('<input data-drupal-selector="edit-autocomplete-items" class="form-autocomplete form-text" data-autocomplete-path="' . $base_path . 'webform/test_element_autocomplete/autocomplete/autocomplete_items" type="text" id="edit-autocomplete-items" name="autocomplete_items" value="" size="60" maxlength="255" />');

    // Check #autocomplete_items partial match.
    $this->drupalGet('webform/test_element_autocomplete/autocomplete/autocomplete_items', ['query' => ['q' => 'United']]);
    $this->assertRaw('[{"value":"United Arab Emirates","label":"United Arab Emirates"},{"value":"United Kingdom","label":"United Kingdom"},{"value":"United States","label":"United States"}]');

    // Check #autocomplete_items exact match.
    $this->drupalGet('webform/test_element_autocomplete/autocomplete/autocomplete_items', ['query' => ['q' => 'United States']]);
    $this->assertRaw('[{"value":"United States","label":"United States"}]');

    // Check #autocomplete_items just one character.
    $this->drupalGet('webform/test_element_autocomplete/autocomplete/autocomplete_items', ['query' => ['q' => 'U']]);
    $this->assertRaw('[{"value":"Anguilla","label":"Anguilla"},{"value":"Antigua and Barbuda","label":"Antigua and Barbuda"},{"value":"Aruba","label":"Aruba"},{"value":"Australia","label":"Australia"},{"value":"Austria","label":"Austria"}]');

    /* Test #autocomplete_existing element property */

    // Check autocomplete is not enabled until there is a submission.
    $this->drupalGet('webform/test_element_autocomplete');
    $this->assertNoRaw('<input data-drupal-selector="edit-autocomplete-existing" class="form-autocomplete form-text" data-autocomplete-path="' . $base_path . 'webform/test_element_autocomplete/autocomplete/autocomplete_existing" type="text" id="edit-autocomplete-existing" name="autocomplete_existing" value="" size="60" maxlength="255" />');
    $this->assertRaw('<input data-drupal-selector="edit-autocomplete-existing" type="text" id="edit-autocomplete-existing" name="autocomplete_existing" value="" size="60" maxlength="255" class="form-text" />');

    // Check #autocomplete_existing no match.
    $this->drupalGet('webform/test_element_autocomplete/autocomplete/autocomplete_existing', ['query' => ['q' => 'abc']]);
    $this->assertRaw('[]');

    // Add #autocomplete_existing values to the submission table.
    $this->drupalPostForm('webform/test_element_autocomplete', ['autocomplete_existing' => 'abcdefg'], t('Submit'));

    // Check #autocomplete_existing enabled now that there is submission.
    $this->drupalGet('webform/test_element_autocomplete');
    $this->assertRaw('<input data-drupal-selector="edit-autocomplete-existing" class="form-autocomplete form-text" data-autocomplete-path="' . $base_path . 'webform/test_element_autocomplete/autocomplete/autocomplete_existing" type="text" id="edit-autocomplete-existing" name="autocomplete_existing" value="" size="60" maxlength="255" />');
    $this->assertNoRaw('<input data-drupal-selector="edit-autocomplete-existing" type="text" id="edit-autocomplete-existing" name="autocomplete_existing" value="" size="60" maxlength="255" class="form-text" />');

    // Check #autocomplete_existing match.
    $this->drupalGet('webform/test_element_autocomplete/autocomplete/autocomplete_existing', ['query' => ['q' => 'abc']]);
    $this->assertNoRaw('[]');
    $this->assertRaw('[{"value":"abcdefg","label":"abcdefg"}]');

    // Check #autocomplete_existing minimum number of characters < 3.
    $this->drupalGet('webform/test_element_autocomplete/autocomplete/autocomplete_existing', ['query' => ['q' => 'ab']]);
    $this->assertRaw('[]');
    $this->assertNoRaw('[{"value":"abcdefg","label":"abcdefg"}]');

    /* Test #autocomplete_existing and #autocomplete_items element property */

    // Add #autocomplete_body values to the submission table.
    $this->drupalPostForm('webform/test_element_autocomplete', ['autocomplete_both' => 'Existing Item'], t('Submit'));

    // Check #autocomplete_both match.
    $this->drupalGet('webform/test_element_autocomplete/autocomplete/autocomplete_both', ['query' => ['q' => 'Item']]);
    $this->assertNoRaw('[]');
    $this->assertRaw('[{"value":"Example Item","label":"Example Item"},{"value":"Existing Item","label":"Existing Item"}]');

    /* Test entity_autocomplete element */

    // Check 'entity_autocomplete' #default_value.
    $webform_entity_autocomplete = Webform::load('test_element_entity_reference');

    $this->drupalGet('webform/test_element_entity_reference');
    $this->assertFieldByName('entity_autocomplete_user_default', 'admin (1)');

    // Issue #2471154 Anonymous user label can't be viewed and auth user labels
    // are only accessible with 'access user profiles' permission.
    // https://www.drupal.org/node/2471154
    // Check if 'view label' access for accounts is supported (8.2.x+).
    if (User::load(0)->access('view label')) {
      $this->assertFieldByName('entity_autocomplete_user_tags', 'Anonymous (0), admin (1)');
    }
    else {
      $this->assertFieldByName('entity_autocomplete_user_tags', '- Restricted access - (0), admin (1)');
    }

    $form = $webform_entity_autocomplete->getSubmissionForm();

    // Single entity (w/o #tags).
    // TODO: (TESTING) Figure out why the below #default_value is an array when it should be the entity.
    // @see \Drupal\webform\WebformSubmissionForm::prepareElements()
    $this->assert($form['elements']['entity_autocomplete']['entity_autocomplete_user_default']['#default_value'][0] instanceof AccountInterface, 'user #default_value instance of \Drupal\Core\Session\AccountInterface.');

    // Multiple entities (w #tags).
    $this->assert($form['elements']['entity_autocomplete']['entity_autocomplete_user_tags']['#default_value'][0] instanceof AccountInterface, 'users #default_value instance of \Drupal\Core\Session\AccountInterface.');
    $this->assert($form['elements']['entity_autocomplete']['entity_autocomplete_user_tags']['#default_value'][1] instanceof AccountInterface, 'users #default_value instance of \Drupal\Core\Session\AccountInterface.');

    /* Test text format element */

    $webform_text_format = Webform::load('test_element_text_format');

    // Check 'text_format' values.
    $this->drupalGet('webform/test_element_text_format');
    $this->assertFieldByName('text_format[value]', 'The quick brown fox jumped over the lazy dog.');
    $this->assertRaw('No HTML tags allowed.');

    $text_format = [
      'value' => 'Custom value',
      'format' => 'custom_format',
    ];
    $form = $webform_text_format->getSubmissionForm(['data' => ['text_format' => $text_format]]);
    $this->assertEqual($form['elements']['text_format']['#default_value'], $text_format['value']);
    $this->assertEqual($form['elements']['text_format']['#format'], $text_format['format']);

    /* Test webform properties */

    // Check element's root properties moved to the webform's properties.
    $this->drupalGet('webform/test_form_properties');
    $this->assertPattern('/Form prefix<form /');
    $this->assertPattern('/<\/form>\s+Form suffix/');
    $this->assertRaw('<form class="webform-submission-test-form-properties-form webform-submission-form test-form-properties js-webform-details-toggle webform-details-toggle" invalid="invalid" style="border: 10px solid red; padding: 1em;" data-drupal-selector="webform-submission-test-form-properties-form" action="https://www.google.com/search" method="get" id="webform-submission-test-form-properties-form" accept-charset="UTF-8">');

    // Check editing webform settings style attributes and custom properties
    // updates the element's root properties.
    $this->drupalLogin($this->adminWebformUser);
    $edit = [
      'attributes[class][select][]' => ['form--inline clearfix', '_other_'],
      'attributes[class][other]' => 'test-form-properties',
      'attributes[style]' => 'border: 10px solid green; padding: 1em;',
      'attributes[attributes]' => '',
      'method' => '',
      'action' => '',
      'custom' => "'suffix': 'Form suffix TEST'
'prefix': 'Form prefix TEST'",
    ];
    $this->drupalPostForm('/admin/structure/webform/manage/test_form_properties/settings', $edit, t('Save'));
    $this->drupalGet('webform/test_form_properties');
    $this->assertPattern('/Form prefix TEST<form /');
    $this->assertPattern('/<\/form>\s+Form suffix TEST/');
    $this->assertRaw('<form class="webform-submission-test-form-properties-form webform-submission-form form--inline clearfix test-form-properties js-webform-details-toggle webform-details-toggle" style="border: 10px solid green; padding: 1em;" data-drupal-selector="webform-submission-test-form-properties-form" action="' . $base_path . 'webform/test_form_properties" method="post" id="webform-submission-test-form-properties-form" accept-charset="UTF-8">');

    /* Test webform buttons */

    $this->drupalGet('webform/test_form_buttons');

    // Check draft button.
    $this->assertRaw('<input class="draft_button_attributes webform-button--draft button js-form-submit form-submit" style="color: blue" data-drupal-selector="edit-draft" type="submit" id="edit-draft" name="op" value="Save Draft" />');
    // Check next button.
    $this->assertRaw('<input class="wizard_next_button_attributes webform-button--next button js-form-submit form-submit" style="color: yellow" data-drupal-selector="edit-next" type="submit" id="edit-next" name="op" value="Next Page &gt;" />');

    $this->drupalPostForm('webform/test_form_buttons', [], t('Next Page >'));

    // Check previous button.
    $this->assertRaw('<input class="wizard_prev_button_attributes js-webform-novalidate webform-button--previous button js-form-submit form-submit" style="color: yellow" data-drupal-selector="edit-previous" type="submit" id="edit-previous" name="op" value="&lt; Previous Page" />');
    // Check preview button.
    $this->assertRaw('<input class="preview_next_button_attributes webform-button--preview button js-form-submit form-submit" style="color: orange" data-drupal-selector="edit-next" type="submit" id="edit-next" name="op" value="Preview" />');

    $this->drupalPostForm(NULL, [], t('Preview'));

    // Check previous button.
    $this->assertRaw('<input class="preview_prev_button_attributes js-webform-novalidate webform-button--previous button js-form-submit form-submit" style="color: orange" data-drupal-selector="edit-previous" type="submit" id="edit-previous" name="op" value="&lt; Previous" />');
    // Check submit button.
    $this->assertRaw('<input class="form_submit_attributes webform-button--submit button button--primary js-form-submit form-submit" style="color: green" data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Submit" />');
  }

}

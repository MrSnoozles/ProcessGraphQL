<?php namespace ProcessWire\GraphQL\Test\Permissions\Editor\Update\NotAvailable;

use ProcessWire\GraphQL\Test\GraphqlTestCase;

class FieldContextEditTest extends GraphqlTestCase
{
  /**
   * + For Editor.
   * + The tamplet is legal.
   * + The user has edit permission for the template.
   * + The field is legal.
   * - The user has no edit permission for the field
   */
  public static function getSettings()
  {
    return [
      "login" => "editor",
      "legalTemplates" => ["city"],
      "legalFields" => ["title"],
      "access" => [
        "templates" => [
          [
            "name" => "city",
            "roles" => ["editor"],
            "editRoles" => ["editor"],
          ],
        ],
        "fields" => [
          [
            "name" => "title",
            "viewRoles" => ["editor"],
            "editRoles" => ["editor"],
          ],
          [
            "name" => "title",
            "context" => "city",
            "viewRoles" => ["editor"],
            "editRoles" => [], // <-- edit permission revoked in context level
          ],
        ],
      ],
    ];
  }

  public function testPermission()
  {
    assertTypePathNotExists(
      ["CityUpdateInput", "title"],
      'The "title" field for CityUpdateInput should not be available if edit permission for the "title" field is revoked in context level.'
    );
  }
}

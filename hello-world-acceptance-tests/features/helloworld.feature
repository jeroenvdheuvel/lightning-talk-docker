Feature:
  In order to feel welcome,
  as a visitor of the site I want the site to welcome me

Scenario: Visit the page without a name
  When I am on "/"
  Then I should see "Hello World" case sensitive

Scenario Outline: Visit the page with different names
  When I am on "/?name=<name>"
  Then I should see "<message>" case sensitive

  Examples:
  | name                   | message                  |
  |                        | Hello World              |
  | werkspot               | Hello Werkspot           |
  | test                   | Hello Test               |
  | terribly%20long%20name | Hello Terribly Long Name |

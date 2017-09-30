# Google Assistant api.ai PHP-Helper

also see example.php

## Setup

### 1. Add webhook to api.ai

see: [api.ai docs - Fulfillment](https://api.ai/docs/fulfillment)

*use " _ " instead of " - " or spaces in intent-names on api.ai*

### 2. Configure settings (optional)

#### code:

<pre><code>$helper_config["PARAMETER"]</code></pre>

#### options:

| PARAMETER       | if true | default |
| --------------- | ------- | ------- |
| log             | logs input, compiled data, output and individual logs in log.json next to the helper.php | false |
| intent-function | executes function with the intent-name from api.ai | false |

#### example:
<pre><code>$helper_config["intent-function"] = true;</code></pre>

### 3. Add helper.php after the import of necessary data (before usage of input)
<pre><code>include(PATH/TO/FILE.php);</code></pre>

## Input

#### code:

<pre><code>$helper["PARAMETER"]</code></pre>

#### options:

| PARAMETER      | type    | description                     | example                        |
| -------------- | ------- | ------------------------------- | ------------------------------ |
| audio          | boolean | capability of audio output      | true                           |
| screen         | boolean | capability of screen output     | false                          |
| timestamp      | string  | timestamp                       | "2017-09-30T11:08:03.526Z"     |
| query          | string  | input                           | "I like cookies"               |
| method         | string  | input method                    | "KEYBOARD"                     |
| locale         | string  | locale                          | "en-US"                        |
| userId         | string  | userId                          | "SLONXM2bnazxzrC3MQMr5nU7xeF9" |
| conversationId | string  | locale                          | "2617870626043"                |
| parameters     | object  | from api.ai resolved parameters | {type: "cookies", person: "I"} |
| intent         | string  | intent                          | "like"                         |

#### example:

<pre><code>global $helper;
$userId = $helper["userId"]</code></pre>

## Output

You can respond on prompts in different versions. For requirements check [Actions on Google Guides - Responses](https://developers.google.com/actions/assistant/responses)

#### methods:

| response type     | code                                                                           | 
| ----------------- | ------------------------------------------------------------------------------ |
| simple response   | <pre><code>simple_response(TEXT);</code></pre>                                 |
| Basic Card        | <pre><code>basic_card(TITLE, DESCRIPTION, IMG-URL, IMG-ALT-TEXT);</code></pre> |
| List selector     | *not included yet*                                                             |
| Carousel selector | *not included yet*                                                             |
| Suggestion Chips  | <pre><code>suggestion_chips([CHIP1, CHIP2, ...]);</code></pre>                 |

#### example:

<pre><code>simple_response("Here is your result:");
basic_card("Cats", "Cats are beatuiful", "https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Kittyply_edit1.jpg/220px-Kittyply_edit1.jpg", "cat from Wikipedia");
suggestion_chips(["grey cats", "white cats, "brown cats"]);
</code></pre>

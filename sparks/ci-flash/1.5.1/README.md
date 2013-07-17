ci-flash
========

A small CodeIgniter library which provides extended flash message functionality.

**What's Included:**

- Custom message types, along with the option to display the message on the current page request.
- Ability to provide custom styling based on the message type.
- Allows you to define which message types to display on output, as well as if they should be merged into single notices (per message type) or not.
- An easy interface to interact with form validation errors.

Usage
-----

If you are using the Sparks package manager:

    $this->load->spark('flash/x.x.x');

Or if you are still rocking it old school:

    $this->load->library('flash');

### Styling

A couple of predefined styles are provided in the configuration file, but more can be easily added.
The example style below will add a style for the message type _new_style_ with `<div class="alert">` prepended and `</div>` appended to the displayed output.

    // file: config/flash.php
    $config['flash']['styles']['new_style'] = array('<div class="alert">', '</div>');

### Adding

To define the type of message, you call the desired name type as the function name, passing in the message contents.

    $this->flash->success('Successfully updated the record.');

Or if you wish to display a _info_ message this page request with a single printf placeholder.

    $this->flash->info_now('This is some useful %s.', 'information');

Screw it, lets make it a _awesome_ message with multiple placeholders.

    $this->flash->awesome('This is a %s %s', array('awesome', 'message'));

### Retrieving

To display all the messages, split into each individual message type (i.e. in a view).

    echo $this->flash->display();

Or to display only the success messages, with a default override of splitting each message into its own styled alert.

    echo $this->flash->display('success', TRUE);

If you do not wish to display all the messages and want to get your hands on an array to play with.

    $messages = $this->flash->get();

Alternatively, you can specify which type of message you wish to retrieve.

    $success_messages = $this->flash->get('success');
    // or using the __get magic method
    $error_messages = $this->flash->error;

### Form Validation Errors

The library also provides a wrapper to easily access and display form validation errors.
Thease types of errors can be displayed either using the special message type _form_ or merged with other _error_ messages.

Change Log
----------

**v1.5.1**

- Bug-fix to correct issue with message session not defaulting to an empty array when retrieving.

**v1.5.0**

- Altered how to add a message for this page request (`_now` after function name, instead of `TRUE` param).
- Added printf functionality to messages being added.
- Added ability to display form validation errors as a single generic error message
- Added functionality to retrieve messages by type, using either the `get` function or `__get` magic method.
- Refactored validation errors processing and message retrieval.

**v1.0.0**

- Initial release
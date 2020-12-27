$(function() {
    $('#bookForm').validate({
        rules: {
            name: {
                required: true
            },
            bookUpload: {
                required: true
            },
            language: {
                required: true
            }
        },
        messages: {
            name: {
                required: 'please enter a Book name'
            },
            bookUpload: {
                required: 'please Upload a Book'
            },
            language: {
                required: 'please select a language'
            }
        }
    });
});

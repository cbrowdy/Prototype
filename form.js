Template.feedbackForm.events({
    'submit #feedback-form' (event, instance) {
        event.preventDefault();

        var form = event.currentTarget;

        let formData = {
            fromName: form.fromName.value.trim(),
            fromEmail: form.fromEmail.value.trim(),
            title: form.title.value.trim(),
            message: form.message.value.trim(),
        }

            if (error) {
                console.log(error);
                toastr.error(error.reason);
                return
            }
            toastr.success('Your feedback was successfully sent to us');
            FlowRouter.go('/');
        });

    }
});

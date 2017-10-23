Template.signIn.events({
 'submit #signInForm'(event,instance) {
  event.preventDefault();
  let form = event.currentTarget;

  let email = form.email.value,
   password = form.password. value;

  Meteor.loginWithPassword(email, password, (error, user) => {
   if(error) {
    console.log(error);
    toastr.error(error.reason);
   } else {
    toastr.success('Successfully signed in');
    FlowRouter.go('advisors.list');
   }
  });
 }
});

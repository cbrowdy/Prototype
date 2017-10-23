alert("here");
Template.signUp.events({
 'submit #signUpForm'(event,instance) {
  event.preventDefault();
  let form = event.currentTarget;

  let email = form.email.value,
   password = form.password. value,
   profile = {
    firstName: form.firstName.value,
    lastName: form.lastName.value
   }

  Meteor.call('users.insert' , {email,password, profile}, (error) => {
   if(error) {
    console.log(error);
    toastr.error(error.reason);
    return;
   }

   toastr.success('Successfully signed up. Please confirm your email');
   FlowRouter.go('signIn');
  });
  // Meteor.call('createUser', (email,password) => {

  // });
 }
});





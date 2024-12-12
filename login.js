const userSignIn = document.getElementById('userSignIn');
const userSignUp = document.getElementById('userSignUp');
const admSignIn = document.getElementById('admSignIn');
const admSignUp = document.getElementById('admSignUp');

const userInForUpButton = document.getElementById('userInForUpButton');
userInForUpButton.addEventListener('click', () => {
    userSignIn.style.display = 'none';
    userSignUp.style.display = 'flex';
});

const userUpForInButton = document.getElementById('userUpForInButton');
userUpForInButton.addEventListener('click', () => {
    userSignUp.style.display = 'none';
    userSignIn.style.display = 'flex';
});

const admInForUpButton = document.getElementById('admInForUpButton');
admInForUpButton.addEventListener('click', () => {
    admSignIn.style.display = 'none';
    admSignUp.style.display = 'flex';
});

const admUpForInButton = document.getElementById('admUpForInButton');
admUpForInButton.addEventListener('click', () => {
    admSignUp.style.display = 'none';
    admSignIn.style.display = 'flex';
});

const changeUserSignInAccountAdmSignIn = document.getElementById('changeUserSignInAccountAdmSignIn');
changeUserSignInAccountAdmSignIn.addEventListener('click', () => {
    userSignIn.style.display = 'none';
    admSignIn.style.display = 'flex';
});


const changeAdmSignInAccountUserSignIn = document.getElementById('changeAdmSignInAccountUserSignIn');
changeAdmSignInAccountUserSignIn.addEventListener('click', () => {
    admSignIn.style.display = 'none';
    userSignIn.style.display = 'flex';
});


const changeUserSignUpAccountAdmSignUp = document.getElementById('changeUserSignUpAccountAdmSignUp');
changeUserSignUpAccountAdmSignUp.addEventListener('click', () => {
    userSignUp.style.display = 'none';
    admSignUp.style.display = 'flex';
});

const changeAdmSignUpAccountUserSignUp = document.getElementById('changeAdmSignUpAccountUserSignUp');
changeAdmSignUpAccountUserSignUp.addEventListener('click', () => {
    admSignUp.style.display = 'none';
    userSignUp.style.display = 'flex';
});
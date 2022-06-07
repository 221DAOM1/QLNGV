importScripts("https://www.gstatic.com/firebasejs/7.16.1/firebase-app.js");
importScripts(
    "https://www.gstatic.com/firebasejs/7.16.1/firebase-messaging.js",
);
// For an optimal experience using Cloud Messaging, also add the Firebase SDK for Analytics.
importScripts(
    "https://www.gstatic.com/firebasejs/7.16.1/firebase-analytics.js",
);

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
firebase.initializeApp({
    apiKey: "AIzaSyDl06JoZavgolR96a7o7vKYpgrg16iBUGg",
    authDomain: "dapm-212f9.firebaseapp.com",
    projectId: "dapm-212f9",
    storageBucket: "dapm-212f9.appspot.com",
    messagingSenderId: "225147019126",
    appId: "1:225147019126:web:9dd2e59139797eb522e457"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();


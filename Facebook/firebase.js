var config = {
    apiKey: "AIzaSyDZTgAMj19yVd3eNzVtZLY_e2nPUoPuTFo",
    authDomain: "develup-42c6a.firebaseapp.com",
    databaseURL: "https://develup-42c6a.firebaseio.com",
    storageBucket: "gs://develup-42c6a.appspot.com"
    // messagingSenderId: "<SENDER_ID>",
};

firebase.initializeApp(config);

var database = firebase.database();
var provider = new firebase.auth.FacebookAuthProvider();


firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    
    console.log(user.displayName)
    console.log(user)
    var bigolphoto = "https://graph.facebook.com/" + user.providerData[0].uid + "/picture?width=200"
    
    console.log("https://graph.facebook.com/ " + user.providerData[0].uid)
    
    var x = document.getElementsByClassName('inputhide');
    
    if(document.getElementById("displayname")){
        $("#displayname").text(user.displayName);
        $("#inputhide, #inputhide2, #namechnage1").css("display","none");
    }else{
        console.log("No Userdata on this page")
    }
    
    if(document.getElementById("facebookprofilebig")){
        document.getElementById("facebookprofilebig").src = bigolphoto;
        document.getElementById("facebookprofile").src = user.photoURL;
    }else if(document.getElementById("facebookprofile")){
        document.getElementById("facebookprofile").src = user.photoURL;
    }else{
        console.log("no photos on this page")
    }
    
    
    var user = firebase.auth().currentUser;

    if( window.location.href.indexOf("signup_form") > -1 ){
        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);

    }else{
        if(window.location.href == 'https://develup1-marcus1995.c9users.io/'){
            return firebase.database().ref('Users').child(user.uid).once('value').then(function(snapshot) {
                var userlocationfound = snapshot.val().Location;
                if(userlocationfound){
                    window.location.href = '../home/index.html' 
                    console.log(userlocationfound)
                }else{
                    window.location.href = '../signup/signup_form.html'
                }
            });
        }else{
            console.log("signup loop complete")
        }
    }
    
    firebase.database().ref('Users').child(user.uid).child("/Aboutme").once('value').then(function(snapshot) {
        $("#about-description").text(snapshot.val());
    });
    
  } else {
    console.log("NOT LOGGED IN");
    
    // window.location.href = '../index.html'
    
    var x = document.getElementById('hideit');
    var y = document.getElementById('showit');
   
    if (x.style.display === 'none') {
        x.style.display = 'none';
        y.style.display = 'block';
    } else {
        x.style.display = 'block';
        y.style.display = 'none';
    }
  }
});

var gender = document.getElementById("dropdownselect");
var locations = document.getElementById("searchTextField");

function registeruser() {
  var user = firebase.auth().currentUser;
  
  firebase.database().ref('Users').child(user.uid).set({
    Username: user.displayName,
    Gender: gender.value,
    Location: locations.value,
    Aboutme: false,
    Specialty: false,
    Study: false,
    Job: false
  });
  
}

var aboutme = document.getElementById("aboutme");
var specialty = document.getElementById("specialty");
var study = document.getElementById("study");
var job = document.getElementById("job");

function saveaboutme() {
    var user = firebase.auth().currentUser;
    return firebase.database().ref('Users').child(user.uid).update({ Aboutme: aboutme.value});
    $("#about-description").text(aboutme.value);
}
function savequickjazz() {
    var user = firebase.auth().currentUser;
    return firebase.database().ref('Users').child(user.uid).update({ Specialty: specialty.value, Study: study.value, Job: job.value});
}


var skilltitle = document.getElementById("skilltitle");
var skilldesc = document.getElementById("skilldesc");
var skilllink1 = document.getElementById("skilllink1");
var skilllink2 = document.getElementById("skilllink2");

function saveskills() {
    var user = firebase.auth().currentUser;
    return firebase.database().ref('Users').child(user.uid).child("Skills").once('value').then(function(snapshot) {
        var myskillcount = snapshot.numChildren()
        firebase.database().ref('Users').child(user.uid).child("/Skills/").child(myskillcount).set({
            Title: skilltitle.value,
            Desc: skilldesc.value,
            Link1: skilllink1.value,
            Link2: skilllink2.value
        });
    });
    
}

function retry() {
   var x = document.getElementById('hideit');
   var y = document.getElementById('showit');
   
    if (x.style.display === 'none') {
        x.style.display = 'block';
        y.style.display = 'none';
    } else {
        x.style.display = 'none';
        y.style.display = 'block';
    }
}

function login() {
    var provider = new firebase.auth.FacebookAuthProvider();
    provider.addScope('public_profile');

    firebase.auth().signInWithRedirect(provider).then(function(result) {
      if (result.credential) {
        var token = result.credential.accessToken;
      }
      var user = result.user;
    }).catch(function(error) {
      var errorCode = error.code;
      var errorMessage = error.message;
      var email = error.email;
      var credential = error.credential;
    });
}

function logout() {
    firebase.auth().signOut().then(function() {
        console.log("Logout")
        window.location.href = '../index.html'
    }).catch(function(error) {
        
    });
}



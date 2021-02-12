<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
 @foreach($db as $data)
<p>{{$data->nama}}</p>
<img src="{{url('/storage/'.$data->file)}}" alt="{{$data->file}}" width="50px">
 @endforeach
</body>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyD_bnfsCh3gWIh61y2YV6MbnNtlawPXOcw",
    authDomain: "belajar-api-298908.firebaseapp.com",
    projectId: "belajar-api-298908",
    storageBucket: "belajar-api-298908.appspot.com",
    messagingSenderId: "646958919996",
    appId: "1:646958919996:web:5f04dd430eeb6d84bf2e39",
    measurementId: "G-Z3TJJ219TS"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
</html>

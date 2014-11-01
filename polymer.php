<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Polymer Test</title>
    <script src="assets/bower_components/platform/platform.js"></script>
    <link rel="import" href="assets/bower_components/polymer/polymer.html" />
    <link rel="import" href="assets/bower_components/google-map/google-map.html" />
</head>
<body>
    <polymer-element name="hello-world" noscript>
        <template>
            <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h1>
        </template>
    </polymer-element>

    <hello-world></hello-world> 

<style>
  google-map {
    display: block;
    height: 300px;
  }
</style>
<google-map latitude="37.77493" longitude="-122.41942">
      <google-map-marker latitude="37.779" longitude="-122.3892"
          title="Go Giants!"></google-map-marker>
</google-map>



</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive Grid Layout</title>
<style>
/* Base style for all devices */
[class*="col-"] {
  float: left;
  padding: 10px;
  width: 100%;
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

/* For mobile phones */
@media only screen and (max-width: 600px) {
  [class*="col-"] {
    width: 100%;
  }
}

/* For tablets */
@media only screen and (min-width: 600px) {
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}

/* For desktops */
@media only screen and (min-width: 768px) {
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}

/* Visual styling for the sections */
.header {
  background-color: #c7d2fe;
  height: 100px;
}

.nav {
  background-color: #fecaca;
  height: 50px;
}

.sidebar {
  background-color: #fde68a;
  height: 350px;
}

.content {
  background-color: #bbf7d0;
  height: 350px;
}

.ads {
  background-color: #bae6fd;
  height: 350px;
}

.footer {
  background-color: #ddd6fe;
  height: 30px;
}
</style>
</head>
<body>

<p><strong>Desktop View</strong></p>

<div class="row">
  <div class="col-12 header"></div>
</div>

<div class="row">
  <div class="col-12 nav"></div>
</div>

<div class="row">
  <div class="col-3 col-s-3 sidebar"></div>
  <div class="col-6 col-s-9 content"></div>
  <div class="col-3 col-s-12 ads"></div>
</div>

<div class="row">
  <div class="col-12 footer"></div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Systems</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
body {
    font-family: 'Inter', sans-serif;
    background-color: #f9f9f9;
    color: #333;
    margin: 0;
    padding: 0;
}

.container, .container1 {
    background-color: #fff;
    margin: 40px auto;
    padding: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    width: 90%;
    max-width: 800px;
}

h1, h4 {
    text-align: center;
    color: #2e7d32;
    margin-bottom: 30px;
}
.dashboard-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; 
}

.dashboard {
    text-align: center;
    padding: 20px;
}

table {
    width: 100%;
    margin-top: 20px;
    border: 2px solid #ddd; 
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd; 
}

th {
    background-color: #2e7d32;
    color: white;
    border-top: 2px solid #ddd; 
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #eafaf1;
}

td {
    border-right: 1px solid #ddd;
}

td:last-child {
    border-right: none; 
}

.buttonadd, .center {
    text-align: center;
    margin-top: 20px;
}

.btn-small {
  padding: 0 10px;
  font-size: 12px;
  height: 30px;
  line-height: 30px;
}

.btn-small.green {
    background-color: #388e3c !important;
}

.btn-small.red {
    background-color: #d32f2f !important;
}
.btn-small.grey {
    background-color:rgb(172, 172, 172) !important;
}

form label {
    display: block;
    margin-top: 20px;
    font-weight: 600;
}

input[type="text"],
input[type="date"],
input[type="number"] {
    width: 100%;
    padding: 10px 12px;
    margin-top: 5px;
    border: 1px solid #ccc;
    background-color: #fafafa;
    box-sizing: border-box;
}

input:focus {
    border-color: #2e7d32;
    outline: none;
}

@media (max-width: 600px) {
    .container, .container1 {
        padding: 20px;
        width: 95%;
    }

    .btn-small, .btn-large {
        width: 100%;
        margin: 8px 0;
    }
}


  </style>
</head>
<body>

</body>
</html>
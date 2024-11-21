<!DOCTYPE html>
<htm lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpiont" content="width=device-width,initial-scale1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/release/v5.8.2/css/all.css"
        intergrity="sha384-o53vjwv+0UjzBfQzYUhtDYW+Pj2cyciDJxpsk1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
        crossorigin="anonymous">

        <title>Get the right pharmacy</title> 
<style>
   :root{
    --primary-color: #00bfff;
}

*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body{
    font-family: Arial, Helvetica, sans-serif;
    -webkit-font-smoothing:antialiased;
    background:#000;
    color:#999;
}

ul{
    list-style:none;
}

h1,h2,h3,h4{
    color:#fff;
}

a{
    color:#fff;
    text-decoration: none;
}

p{
    margin:0.5rem 0;
}
img {
    width:100%;
}


.showcase{
    width: 100%;
    height: 93vh;
    position:relative;
    background:url('./images/background.jpg') no-repeat center center/cover;
}


.showcase-top{
    position:relative;
    z-index: 2;
    height: 90px;

}
.showcase-top img {
  /* Existing styles */
  width: 170px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

  /* New additions for lowering the image */
  transform: translate(-50%, -calc(50% + offset));
}

.showcase-top a {
    position:absolute;
    top:50%;
    right:0;
    transform: translate(-50%,-50%);

}

.showcase-content {
    position:relative;
    margin:auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-top: 9rem;
}

.showcase-content h1{
    font-weight: 700;
    font-size: 5.2rem;
    line-height: 1.1;
    margin:0 0 2rem;
    color:#333;
}
.showcase-content p{
    text-transform:uppercase;
    color:#333;
    font-weight: 400;
    font-size: 1.9rem;
    line-height: 1.25;
    margin:0 0 2rem;
}

/*button*/
.btn{
    display: inline-block;
    background: var(--primary-color);
    color:#fff;
    padding:0.4rem 1.3rem;
    font-size: 1rem;
    text-align: center;
    border:none;
    cursor: pointer;
    margin-right: 0.5rem;
    outline:none;
    box-shadow: 0 1px 0 rgba(red, green, blue, alpha);
    border-radius: 2px;
}
.btn:hover{
    opacity:0.9;
}

.btn-rounded{
    border-radius: 5px;
}

.btn-xl{
    font-size: 2rem;
    padding: 1.5rem 2.1rem;
    text-transform: uppercase;
    border-radius:5px;
}

.btn-lg{
    font-size: 1rem;
    padding: 0.8rem 1.3rem;
    text-transform: uppercase;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.container.mt-5 {
  display: flex; /* Enables centering the search bar within the container */
  justify-content: center; /* Centers the search bar horizontally within the container */
  margin-top: 2rem; /* Adjust the top margin as needed (currently 2rem) */
  width: 100%;
/*   border: 2px solid #444; */
  text-align: center; /* Centers the search bar horizontally */
}

.container.mt-5 form {
  display: flex; /* Enables sizing adjustments for the form elements */
}

.container.mt-5 form input[type="text"] {
  height: 60px; /* Adjust the height of the search bar (currently 40px) */
  width: 900px;
  padding: 0 1rem; /* Adjust the padding within the search bar */
  font-size: 16px; /* Adjust the font size of the text in the search bar */
  border: 1px solid #ccc; /* Adds a border to the search bar */
  border-radius: 5rem; /* Adds rounded corners to the search bar */
}

.container.mt-5 form button[type="submit"] {
  height: 60px; /* Adjust the height of the search button (same as search bar) */
  padding: 0 1rem; /* Adjust the padding within the search button */
  font-size: 16px; /* Adjust the font size of the text in the search button */
  background-color: #007bff; /* Set the background color of the search button */
  color: #fff; /* Set the text color of the search button */
  border: none; /* Remove border from the search button */
  border-radius: 5px; /* Adds rounded corners to the search button */
  cursor: pointer; /* Indicates clickable behavior on hover */
  border-radius: 4rem;
  width: 108px;
  position: relative;
  left: -108px;
}
</style>
    </head>
    <ul>
  <li><a class="active" href="landingpage.php">Home</a></li>
  <li><a href="add_medoc.php">pharmacy</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a class="active" href="MSS - About Us.php">About</a></li>
</ul>
    <body>
    
        <header class="showcase">
            
            <div class="showcase-top">
                <img src="images/wisepharma.png" alt="wisepharma-1">
               
            </div>
            
  <div class="container mt-5">
    
    <form method="GET" action="Search result.php">
      <input type="text" name="search" placeholder="Search for medicine" required>
      <button type="submit">Search</button>
    </form>
  </div>
  
            <div class="showcase-content">
                <h1>looking for the right medication</h1>
                <p>Visit the right pharmacy</p>
                
            </div>
        </header>
        <section class="tabs">
            <div class="container">
                <div id="tab-1" class="tab-item tab-border">

                </div>
            </div>
        </section>

    </body>

</html>
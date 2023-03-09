<!-- https://fr.w3docs.com/tools/code-editor/4635 -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="tous_parcourir.css" rel="stylesheet" type="text/css"/>
	<title>Recherche</title>

  <style>
      body {
        box-sizing: border-box;
      }
      #reach {
        background-color: #FFC961;
        float: center;
      }
      .container {
        width: 30rem;
        height: 100%;
        margin: 4rem 25rem;
        position: relative;
      }
      #searchbar {
        font-size: 2.4rem;
        width: 30rem;
        height: 5rem;
        border: none;
        outline: none;
        border-radius: 10rem;
        padding: 2rem;
        transition: all 0.1s;
        transition-delay: 0.1s;
      }
      #searchbar:hover {
        width: 32rem;
        height: 6rem;
      }
      button {
        height: 2rem;
        position: absolute;
        top: 1.5rem;
        right: 1rem;
        transition: all 0.1s;
        transition-delay: 0.1s;
      }
      <!-- hover c'est quand on passe sur le texte avec la souris
      button:hover {
        cursor: pointer;
      }
      #searchbar:hover + button {
        height: 2.5rem;
        top: 1.8rem;
        right: 0;
      }
      #searchbar::placeholder {
        opacity: 0.3;
      }
      /*form, td {
        padding: 5rem 15rem;
        width: 32rem;
        height: 6rem; */
}
    </style>
</head>

<!-- pour inclure le menu -->
<?php include('menu.php'); ?>

<body>
	<br> <br> <br> <br>

  <h1>Recherche</h1>

<div id="reach">
<!-- <table class="table2" border="0"> -->
  <form action="search.php" method="post">
    <tr>
      <td>
        <input type="text" name="recherche"  >
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input class="boutonFormulaire" type="submit" name="submit" value="rechercher" >
      </td>
    </tr>
  </form>
 <!-- </table> -->
</div>
	
</body>
# odeWeb

**Öde** is a website of the android project of öde app, which was made for the Web Developement class in VSITE university.

## Technologies

- HTML  
- CSS
- JavaScript
- PHP

### About Website


This website was designed to show the öde app. It does not contain an algorithm or opertaion. Instead, this is a promotion of the app. You can get a better idea what it is and even download it from here.

### Usage

![Image of English](https://github.com/FatiGurqiti/odeWeb/blob/develop/images%20for%20git/1.bmp)

In the main page, on the top menu you will see languange choises. The default languange is English. You may view the website in either Turkish or English.
Simply click the button on top and make your choise.


When you made your choise the website will change it's languange instantly without the need of refreshing.
This is being done by both **JavaScript** and **PHP**
First, **JavaScript** get's the choise from **select** tag

```
<select class="selectpicker languange" data-width="fit"> 
         <option <?php englishSelected(); ?> onclick="langEN()">English</option> 
      <option   <?php turkishSelected(); ?>  onclick="langTR()" >Türkçe</option> 
    </select>
```

Once language is selected, JavaScipt runs the function you selected.

```
 function langEN(){location.replace("./index.php?lang=<?php echo "EN" ?>");} 
 function langTR(){location.replace("./index.php?lang=<?php echo "TR" ?>");} 
```

These functions changes the url, adding **lang** variable to the link.
Then **PHP** get this variable

```
 function englishSelected(){if($_GET["lang"] == "EN") echo "selected='selected' ";} 
 function turkishSelected() {if($_GET["lang"] == "TR") echo "selected='selected' ";} 
```


Since we have **lang** variable now, we have the knowledge of the selected languange. Thus, **PHP** can run the **selectLanguange** function

```
 function selectLanguange($EN,$TR){ 
  if($_GET["lang"] == "EN") echo $EN; 
  if($_GET["lang"] == "TR") echo $TR;}
```

When typing in an **HTML** tag, the texts are written in a **PHP** function

 ` <p class="keep"><?php selectLanguange("KEEP ON TRACK!","TAKİPTE KAL!");  ?></p> `

The first variable is the English of the word and second one is the Turkish.

![Image of Turkish](https://github.com/FatiGurqiti/odeWeb/blob/develop/images%20for%20git/2.bmp)

Afterwhile, you may scroll down to preview the app

![Image of App](https://github.com/FatiGurqiti/odeWeb/blob/develop/images%20for%20git/3.bmp)

Or have a walkthrough around the website

![Image of Download](https://github.com/FatiGurqiti/odeWeb/blob/develop/images%20for%20git/4.bmp)

## Write a code for design menu system using list tag


## Code

### index.html


```html
<!DOCTYPE html>
<html>
  <head>
    <title>Menu System</title>
    <style>
      ul.menu {
        list-style-type: none;
        padding: 0;
      }

      ul.menu li {
        display: inline;
        margin-right: 20px;
      }

      ul.menu li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
      }

      ul.menu li a:hover {
        color: #ff0000;
      }
    </style>
  </head>
  <body>
    <ul class="menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Portfolio</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </body>
</html>



```

## Output

![Output Image Unavailable](1.png)
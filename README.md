# JavaScript-functionality-import-in-table-from-a-json-file
Create a responsive html page with javascript-only functionality and create / import a table from a json file taken from the provided url
asigment vireo: https://youtu.be/tUfyg_neK3o
json: https://websitepr.eu/banner/tsk/data.json

A S I G M E N T:

# HTML/CSS/JS SPECIFICATION AND REQUIREMENTS

## Page UI

- Liquid layout
- max content wrapper width: 1280px, min widht: 800
- content centered on the page
- right column width: 30% of content wrapper
- left column and right column padding 10px
- - - either column can lead the height of the page
- page main title - embed font -> HelveticaInserat LT
- logo element must be fixed at all time at the left border of the page

### Dynamics
- all functionality realizirate only with js
- main navigation, drop down menu based on JS - don't use ready scripts
- right column dynamic boxes:
- - - click to open, click to close
- - - two boxes must not be open in the same time 

### Language menu

- hover makes flag opaque
- selected flag is opaque

### Misc

- font sizes and box sizes may be in %, px or em

## Table Task

1. Create table with json file:https://websitepr.eu/banner/tsk/data.json
2. Implement pagination (top and bottom of the table) 100 lines per page

| 1 | 2 | 3 | 4 | 5 | 6 | 7 | ... |
-------------------------------------------------
|  **Title Foo**  |    ...    |  **Title Bar**  |
-------------------------------------------------
|    Foo value    |    ...    |    Bar value    |
-------------------------------------------------
|    Foo value    |    ...    |    Bar value    |
-------------------------------------------------
|                      ...                      |
-------------------------------------------------
|    Foo value    |    ...    |    Bar value    |
-------------------------------------------------
|    Foo value    |    ...    |    Bar value    |
-------------------------------------------------
| 1 | 2 | 3 | 4 | 5 | 6 | 7 | ... |

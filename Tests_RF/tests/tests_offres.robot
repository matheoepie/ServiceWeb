#pip install robotframework
#pip install robotframework-seleniumlibrary

#robot -d results tests_offres.robot

*** Settings ***

# Ici on inclut les librairies requises

Documentation  Test offres
Library  Selenium2Library
Library  SeleniumLibrary

*** Variables ***

# Ici on définit les variables au besoin

*** Test Cases ***
Test ajout offre
    [Documentation]  Ajout d'une offre
    Open Browser  http://localhost/API_Projet/ServiceWeb/Website/index.php
    Wait Until Element Is Visible  class=nav-link
    Click Element  id=createoffer
    Wait Until Element Is Visible  class=col-md-4
    Input Text  id=1  Ceci est un test Robot Framework
    Input Text  id=2  Référence Robot Framework
    Input Text  id=3  Description Robot Framework
    Input Text  id=4  bcp de temps avec Robot Framework
    Input Text  id=5  2021-12-25
    Click Button  id=Submit
    Close Browser
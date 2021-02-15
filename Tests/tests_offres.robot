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
    [Documentation]  Connexion et ajout d'une offre
    Open Browser  http://localhost/API_Projet/ServiceWeb/Website/index.php
    Wait Until Element Is Visible  class=nav-link
    Click Element  id=connect
    Input Text  id=formGroupExampleInput  667gang
    Input Text  id=exampleFormControlInput1  667gang
    Click Element  class=btn-primary
    Click Element  id=createOffer
    Input Text  id=1  Ceci est un test Robot Framework
    Input Text  id=2  Référence Robot Framework
    Input Text  id=3  Description Robot Framework
    Input Text  id=4  bcp de temps avec Robot Framework
    Input Text  id=5  2021-12-25
    Click Button  id=Submit
    Close Browser
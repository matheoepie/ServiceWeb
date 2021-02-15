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
    [Documentation]  Se connecter
    Open Browser  http://localhost/API_Projet/ServiceWeb/Website/index.php
    Wait Until Element Is Visible  class=nav-link
    Click Element  id=connexion
    Wait Until Element Is Visible  class=col-md-4
    Input Text  id=formGroupExampleInput  Jean-Pierre Polnareff
    Input Text  id=exampleFormControlInput1  JPP2021
    Click Button  id=Submit
    Close Browser
#pip install robotframework
#pip install robotframework-seleniumlibrary

#robot -d results tests_offres.robot

*** Settings ***

# Ici on inclut les librairies requises

Documentation  Test nouveau compte
Library  Selenium2Library
Library  SeleniumLibrary

*** Variables ***

# Ici on définit les variables au besoin

*** Test Cases ***
Test nouveau compte
    [Documentation]  Création d'un compte et connexion
    Open Browser  http://localhost/API_Projet/ServiceWeb/Website/index.php  chrome
    Wait Until Element Is Visible  class=nav-link
    Click Element  id=create
    Input Text  id=formGroupExampleInput  a
    Input Text  id=exampleFormControlInput1  a
    Click Element  id=Submit
    Click Element  id=logout
    Click Element  id=connect
    Input Text  id=formGroupExampleInput  a
    Input Text  id=exampleFormControlInput1  a
    Click Element  id=Submit
    Close Browser
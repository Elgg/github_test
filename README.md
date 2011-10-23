Elgg Github Workflow
====================

Fixing a bug
------------

 1. Create a github account

 2. Fork the Elgg repository

    Click the fork button at http://github.com/Elgg/Elgg

 3. Clone your fork to your computer to create a local repository

    ```
    git clone git@github.com:[your github username]/github_test.git
    ```

    As you will need to test your changes, you should do this where you plan
    to install Elgg. Git allows you to clone into a directory if it is empty.
    If using XAMPP, you may want to clone this repository into
    C:\xampp\apache\htdocs\ if you want this Elgg site to be located at
    http://localhost/.

 4. Create a branch for your bug fix

    ```
    git branch mybranch
    ```

 5. Checkout your branch in your local repository

    ```
    git checkout mybranch
    ```

 6. Make your changes and commit them to your branch

    You will need to install an Elgg site based on your local Elgg repository.
    Then you will need to make changes, test them, and commit them to your
    branch. At a minimum, the two git commands that you will need to know are
    *git add* and *git commit*.

 7. Push your branch to your github fork

    ```
    git push origin mybranch
    ```

 8. Create a pull request

    Select your new branch on the web page for your Github fork. Then click the
    Pull Request button. Fill out the title and description for your changes.
    Include the ticket number from Elgg's bug tracker (http://trac.elgg.org/).

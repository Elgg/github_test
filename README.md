Elgg Github Workflow
====================

Fixing a bug
------------

 1. Install git

    Github has OS specific instructions on their website for [Windows]
    (http://help.github.com/win-set-up-git/), [Mac OSX]
    (http://help.github.com/mac-set-up-git/), and [Linux]
    (http://help.github.com/linux-set-up-git/). These instructions lead you
    through the process of installing a command line client. If you prefer to
    use a graphical interface, take a look at [TortoiseGit]
    (http://code.google.com/p/tortoisegit/) for Windows.

 2. Create a github account

    You will need to do some setup work before you can use your account. Read
    [this page](http://help.github.com/set-your-user-name-email-and-github-token/)
    for instructions on this.

 3. Fork the Elgg repository

    Click the fork button at http://github.com/Elgg/Elgg

 4. Clone your fork to your computer to create a local repository

    ```
    git clone git@github.com:[your github username]/github_test.git
    ```

    As you will need to test your changes, you should do this where you plan
    to install Elgg. Git allows you to clone into a directory if it is empty.
    If using XAMPP, you may want to clone this repository into
    C:\xampp\apache\htdocs\ if you want this Elgg site to be located at
    http://localhost/.

 5. Create a branch for your bug fix

    ```
    git branch mybranch
    ```

 6. Checkout your branch in your local repository

    ```
    git checkout mybranch
    ```

 7. Make your changes and commit them to your branch

    You will need to install an Elgg site based on your local Elgg repository.
    Then you will need to make changes, test them, and commit them to your
    branch. At a minimum, the two git commands that you will need to know are
    *git add* and *git commit*. Github has a [git cheatsheet]
    (http://help.github.com/git-cheat-sheets/) and there is also a
    [great online book](http://book.git-scm.com/) on git.

 8. Push your branch to your github fork

    ```
    git push origin mybranch
    ```

 9. Create a pull request

    Select your new branch on the web page for your Github fork. Then click the
    Pull Request button. Fill out the title and description for your changes.
    Include the ticket number from Elgg's bug tracker (http://trac.elgg.org/).

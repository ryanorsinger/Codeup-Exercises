Step 1 - initialize a local repository
    `cd foldername/`
    `git init`
    `git add filename.html` to add a single file.
    `git add resume.html portfolio.html /css/style.css` to
    git commit -m "here's my commit message"

Step 2 - create a remote repository (GitHub)
    name repository and provide a description
    copy the `git remote add origin git@github/username/repository-name.git` command (your address will be different)

Step 3
    inside foldername/
    paste `git remote add origin git@github.com/username/repo.git` into `~/foldername/`
    `git push -u origin master` for your first push

Workflow on this repository from here on out:
- create or edit our files locally
- `git add filename.html`
- `git commit -m "added a login form"` to add a commit message. Or do `git commit` to open up Sublime.
- `git push origin master`

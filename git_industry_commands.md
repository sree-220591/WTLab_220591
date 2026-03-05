
>Git configuration commands
<br>

>> i)Git config commands anevi configurations options ni set cheyadaniki ledha get cheyadaniki use chestham.<br>
>> ii)--global: A flag that indicates the configuration should be applied to the current user across all their repositories. This setting is stored in the ~/.gitconfig file in your home directory.
<br>

1) Command: git config --global user.name
   Syntax: git config --global user.name "Your Name"
   Purpose: By default user.name tarvata "Your name" ivvakapoina, it shows system account name, Or nuvvu okavela manual ga set cheyali anukunte 'git config --global user.name "Deepti Sree"' use cheyocchu..
   <br>
   So with this we can __get__ the author name of the commit
   <br>
   <img width="643" height="74" alt="image" src="https://github.com/user-attachments/assets/b106464f-8007-406c-9c19-bae19dc9b774" />
<br>

   > Manual ga user.name ni set chestunna..
   Command: git config --global user.name "Sree"<br>
   Purpose: Used to __set__ the user.name<br>
   <img width="682" height="63" alt="image" src="https://github.com/user-attachments/assets/0dd2e98c-58ec-4411-baf2-2865d4fce7d7" />
   <br>
   
   
3) git config --global user.email
   Purpose : it __gets__ the email of the author<br>
   <img width="651" height="40" alt="image" src="https://github.com/user-attachments/assets/a259638d-0860-4655-92ab-44ea8097e03b" />
   <br>

4) git config --list<br>
   Purpose : Check all current Git configuration settings to see what name, email, and other options Git is using. <br>
   <img width="556" height="263" alt="image" src="https://github.com/user-attachments/assets/f0d29c7f-b325-4ded-8824-fc5dcb611227" /><br>

5) Syntax: git config --unset<br>
   Purpose: Existing config values remove cheyyadam kosam<br>
   Used to remove a single-valued configuration entry from a specified Git configuration file.<br>
   Example: git config --unset user.email <br>
   By default, it removes the configuration settings from the local only, config details in global remain the same. 
   <img width="607" height="52" alt="image" src="https://github.com/user-attachments/assets/0cf90bea-52e4-4c35-91aa-2a69ac60cd00" /><br>
   
>2)Repository Setup Commands
<br>
1) Command: git init <br>
   Syntax: git init <directory> <br>
   Purpose: used to create a new, empty Git repository in a specified or the current directory.<br>
   Example: for suppose we created a Git_Demo and initialised it as a local git repository.<br>
   <img width="586" height="76" alt="image" src="https://github.com/user-attachments/assets/38fcbb40-5133-492a-b97b-0a359e1aa880" /> <br>


2)Command: git clone<br>
  Syntax: git clone "repo-url"<br>
  Purpose: used to create a local, working copy of an existing remote repository. This copy includes all files, branches, and the complete commit history of the project. <br>
  Example: Suppose your company has a remote repository named Project-timepass, and wanted your team to work on that, so everyone creates a clone in their local repository and works on that project,<br>
 <img width="752" height="54" alt="image" src="https://github.com/user-attachments/assets/43493aad-bd1a-4a30-9ae3-28920f3a8bd2" />
 <br>

3)Command: git clone --branch<br>
  Syntax: git clone --branch <branch-name> <repo-link><br>
  Purpose: to clone a specific branch from a remote repository<br>
  Example: Repo lo branch → feature-login 
  <br>Local lo branch levu → default branch main matrame clone avuthundi<br>
 <img width="883" height="140" alt="image" src="https://github.com/user-attachments/assets/479a2f81-2119-48b2-b509-b1f89d077852" /><br>

4)Command: git clone --depth <br>
  Syntax: git clone --depth <n> <repository-url> [destination-folder] <br>
  Purpose: create a shallow clone of a repository, which significantly reduces download time and disk space usage by limiting the commit history to a specified number of recent commits<br>
  <img width="883" height="140" alt="image" src="https://github.com/user-attachments/assets/68fc9cae-eab3-46f2-b556-9e80a1666468" /> <br>

>3)Repository Status & Inspection<br>
1)Command: git status<br>
  Purpose: Current repository state chudataniki use chestam<br>

Shows:<br>

Modified files → changed but not staged (git add cheyyaledu)<br>

Staged files → ready for commit<br>

Untracked files → new files Git ki teliyadu<br>

Current branch → e branch lo unnava<br>

Any commits not pushed<br>
<img width="630" height="193" alt="image" src="https://github.com/user-attachments/assets/e17365f1-8a0f-447b-bcc8-819710fc9c28" /><br>
<img width="633" height="226" alt="image" src="https://github.com/user-attachments/assets/bc86dc36-9851-4315-8830-751342c2386f" /><br>

2)Command: git log<br>
  Purpose: See detailed history of commits in the repository.<br>
  Example: Repo lo anni __commits history__ chudataniki<br>
Shows:
Commit hash (full long), 
Author name,
Date & time,
Commit message,
<img width="630" height="244" alt="image" src="https://github.com/user-attachments/assets/74350fd1-c5d6-40f1-877d-c8136162f9eb" /><br>

3)Command: git log --oneline<br>
  Purpose: Short / concise history<br>
  Each commit -> one line -> first 7 chars of hash + commit message<br>
<img width="731" height="238" alt="image" src="https://github.com/user-attachments/assets/4bb806d1-be63-4a3f-b83b-e9cf560ab854" /><br>

4)Command: git log --graph<br>
  Purpose: Shows commit history graphically with branches in terminal<br>
  <img width="732" height="256" alt="image" src="https://github.com/user-attachments/assets/15d77bd6-61c0-49d4-81c1-033440d64df6" /><br>
  <img width="747" height="260" alt="image" src="https://github.com/user-attachments/assets/f22cc752-24d7-400a-84c2-8fc1ed536f9d" /><br>

5)Command: git show<br>
Purpose: used to display information and the content of various Git objects, such as commits, tags, trees, and blobs<br>
<img width="747" height="260" alt="image" src="https://github.com/user-attachments/assets/589700af-5a8f-4185-8bfa-cff71769a1d3" /><br>

6)Command: git diff<br>
  Purpose: Compare working directory vs staging area / last commit <br>
Shows what changes you made before committing <br>
<img width="605" height="229" alt="image" src="https://github.com/user-attachments/assets/e92342b7-6233-41b3-b16c-c309b2792235" /><br>

7)Command: git blame <br>
  Syntax: git blame <file-path> <br>
  Purpose:helps developers trace the history of a file by annotating each line with information about the last revision and author who modified it.<br>
  <img width="885" height="443" alt="image" src="https://github.com/user-attachments/assets/831bd90d-e404-4747-ada3-0d481f377d68" /><br>
  <img width="886" height="124" alt="image" src="https://github.com/user-attachments/assets/8270f981-0c7e-4022-9dec-1bc1b69f7305" /><br>

8)Command: git reflog<br>
  Purpose: the primary use of __git reflog__ is to recover lost work<br>
  <img width="855" height="313" alt="image" src="https://github.com/user-attachments/assets/6e28154c-3dc6-421b-bb99-3eef9d1706f1" /><br>

9)Command: git shortlog<br> 
  Purpose: used to summarize the output of git log by grouping commits by author<br>
  <img width="853" height="328" alt="image" src="https://github.com/user-attachments/assets/c026c361-360c-4719-b0d7-ccc9f3ac19cf" /><br>

>4)File Tracking Commands
1)Command: git add<br>
  Syntax: git add <file-name><br>
  Purpose: manam local ga edit chesina modify chesina create chesina files anni git loki add cheyadam kosam git add use chestham.<br>
  Example: 

2)Command: git add .<br>
  Syntax: git add .<br>
  Purpose: <br>
  Example: <br>

3)Command: git add -p<br>
  Purpose: <br>
  Example: 

4)Command: git restore<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

5)Command: git restore --staged <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

6)Command: git rm <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

7)Command: git mv<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

>5)Commit Commands

1)Command: git commit <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

2)Command: git commit -m
  Syntax: <br>
  Purpose: <br>
  Example: <br>

3)Command: git commit --amend<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

4)Command: git commit --no-edit
  Syntax: <br>
  Purpose: <br>
  Example: <br>

>6)Branch Management Commands

1)Command: git branch<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

2)Command:git branch -a<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

3)Command:git branch -d <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

4)Command:git branch -D <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

5)Command:git checkout<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

6)Command:git checkout<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

7)Command:git switch<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

8)Command:git switch -c<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

>7)Merge & Integration Commands

1)Command: git merge<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

2)Command:git merge --no-ff <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

>8)Remote Repository Commands

1)Command: git remote<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

2)Command: git remote -v<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

3)Command: git remote add<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

4)Command: git remote remove<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

5)Command:git fetch <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

6)Command:git fetch --all <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

7)Command: git pull<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

8)Command: git pull --rebase<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

9)Command:git push <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

10)Command:git push -u origin branch-name<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

11)Command:git push --force<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

>9)Stash Commands

1)Command: git stash<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

2)Command:git stash list <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

3)Command: git stash pop<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

4)Command: git stash apply<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

5)Command: git stash drop<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

6)Command: git stash clear<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

>10)Reset & Undo Commands

1)Command:git reset<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

2)Command:git reset --soft <br>
  Syntax: <br> 
  Purpose: <br>
  Example: <br>

3)Command: git reset --mixed<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

4)Command:git reset --hard <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

5)Command: git revert<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

6)Command:git clean -f <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

7)Command: git clean -fd<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

>11)Rebasing Commands

1)Command: git rebase<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

2)Command: git rebase -i<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

3)Command: git rebase --continue <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

4)Command: git rebase --abort<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

>12)Cherry Pick & Patch Commands

1)Command: git cherry-pick<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

2)Command: git format-patch<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

3)Command: git apply<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

4)Command:git am <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

>13)Tagging Commands

1)Command: git tag <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

2)Command: git tag -a <br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

3)Command: git tag -d<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

4)Command: git push origin --tags<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

>14)Submodule Commands

1)Command: git submodule add<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

2)Command: git submodule init<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

3)Command: git submodule update<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

>15)Debugging Commands

1)Command: git bisect<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

2)Command:git bisect start<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

3)Command:git bisect good<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>

4)Command:git bisect bad<br>
  Syntax: <br>
  Purpose: <br>
  Example: <br>
  
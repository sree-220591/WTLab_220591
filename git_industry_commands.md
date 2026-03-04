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
  Synatx: git blame <file-path> <br>
  Purpose:helps developers trace the history of a file by annotating each line with information about the last revision and author who modified it.<br>








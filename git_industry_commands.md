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

2)Command: git clone
  Syntax: git clone "repo-url"
  Purpose: git clone "
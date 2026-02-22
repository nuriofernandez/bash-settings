# Bash Settings

This is my personal repository with my bash settings!

![](https://i.imgur.com/GKV8IwP.png)

### Disable ZSH (only macOs)

MacOs now uses ZSH as the default shell, I preffer bash...
So, this is how to set bash as the default shell:

```bash
chsh -s /bin/bash
```

### Requirements (only MacOs)

You will need to have `brew` installed in your system.

You can install it with this command:

```bash
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```

### Additional dependencies

To make the git module work, you will need to install `bash-completion` and `git`. (*macOs preinstalled git may not work*)

```
brew install bash-completion git
```

### Installation

- Copy files inside the `userfolder` to your user home directory. (`~`)

> You can setup symbolic links to have a better experience updating your git repository.

```bash
cd ~
ln ~/Documents/GitHub/nuriofernandez/bash-settings/userfolder/.bash_profile .bash_profile
ln -s ~/Documents/GitHub/nuriofernandez/bash-settings/userfolder/.bash .bash
```

If you have a `.bash_profile` already, I suggest you stop using it to use this settings architecure.
Just create new modules at the `.bash` folder to have your settings organized.

### What the hell is a module?

What I do to keep things organize, is just creating small files with minimum logic. I call them modules. That's it.
Instead of having 999 lines on your `.bash_profile`, what I do is just doing multiple `source` commands and keep everything in his corresponding place.

### Hanlding modules dependencies / priorities

In case you need to execute a specific script before another one,
just name it with the prefix `.3_` or anyother number. Lower numbers got executed first.

```bash
$ ls .bash/

.1_brew # <-- first to be executed
.2_git  # <-- second to be executed
.go     # <-- to be executed normally
.java   # <-- to be executed normally
```
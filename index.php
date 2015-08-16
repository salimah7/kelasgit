<?php

echo "hello git at UTM";

echo "intro to git basic";

echo"Most of the time you will have a checked-out branch (the special reference HEAD points to the current branch, see .git/HEAD for example). When you commit something, your commits are attached to it and the branch reference is moved to the new commit. Simple. But sometimes your HEAD may point to something other than a branch head (for example, when you checkout an older revision by its ID or tag). This is called a detached head. It is a very simple, important and confusing situation. There’s nothing wrong about it, but it hides a peril: if you commit to a detached head, Git creates a new commit and attaches it to the current commit, forming a branch. But this branch has no name! It will just grow sideways as a normal branch without a name. Here’s what’s wrong with it:"

if ($_POST['edit']) {
	echo "for editing";
}
# Contributing to Compute Freely

## Submitting Distributions

Submitting a new distribution pages is simply a matter of writing a new post and adding it to the `_posts` folder. When writing a post for a distribution you would like to submit, you are free to editorialize, but if you gather information from the project's website to fill out the post paraphrase as best you can opposed to copying straight from it.

For your convenience a template is included in the `_drafts` folder.

### Metadata

Each post has "frontmatter" that contains metadata for the post and about the distribution in general that shows up on the individual pages for each. Here's an example from the post for Ubuntu.

```yaml
layout: post
author: Sam Hewitt
title: "Ubuntu"
date: "2017-03-02"
logo: "distro-ubuntu"
image: "desktop-ubuntu-16.10.png"
caption: "ubuntu 16.10 desktop"
tags: [desktop, server, beginner, gnome]
notes:
  homepage: https://ubuntu.com/
  version: "16.10"
  based-on: debian
  desktops: [GNOME, Unity]
  install: graphical
  developers:
    - name: Canonical
      url: https://canonical.com/
    - name: Ubuntu Community
      url: https://community.ubuntu.com/
```

#### Publishing

The first half of the frontmatter contains publishing and categorization infomation.

 - `layout` is the page layout for Jekyll. **Do not change this**
 - `title` in this case will refer to the distribution name
 - `date` is the date of publication (addition)
 - `logo` is the file name of the logo that you provide (minus the extension)
 - `image` is the filename of the screenshot you provide
 - `caption` is an optional description of the screenshot
 - `tags` are an array of tags for the post, these should be limited to things like the desktop environments it uses, it's primary purpose (e.g. server, desktop, enterprise), a one-word estimation of it's difficulty

#### Notes

The `notes` section contains pertinent info about a distribution that show's up in the 'Notes' section on each post.

 - `homepage` is the complete url of a distribution's homepage
 - `version` is the current version at the time of publication
 - `based-on` if the distribution is based on another you include that here
 - `desktops` is a list of all default desktops arranged in an array, i.e. if a distribution provides multiple spins that are of different desktop environments you list those here
 - `install` whether the installation is "Graphical" or "Command Line" or "Live" **keep it to these**
 - `developers` name the primary developer or developers of the distribution and optionally provide a url


### Including image assets

For a submission to be included you must also include a project's logo and a screenshot.

An acceptable screenshot must:
 - be of a fresh installation, no user-modifications or changes
 - be of the desktop, do not have any windows, menus, etc. open
 - be of at least 720p resolution
 - follow the name convention of the other included screenshots that is `desktop-<name>-<version>`

An acceptable version of the project logo must:
 - be of the distibution icon, not the wordmark 
 - be in SVG format, a PNG or other file format will not display
 - follow the name convention of the other included logos that is `distro-<name>`
 - be 200x200 pixels and the logo is at most 160x160 within that

## Updating An Existing Post

If you're simply updating an existing post, make the changes to the post as necessary but don't remove the original author's name from `author` or change the `date:` field (this is to keep track of the original), simply add the following lines:

```yaml
updated: "YYYY-MM-DD"
updater: "Your Name"
```

Then rename the post file with the `updated:` date.

## Other contributions

Overall improvements to the site are gladly accepted as well and can be made via a general pull request.

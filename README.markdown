# Emailmanager Email Gateway

- Version: 1.0beta
- Date: 2011-03-09
- Requirements: Symphony 2.2 or later
- Authors: Alistair Kearney, Michael Eichelsdörfer
- Maintainer: Symphony Community, <https://github.com/symphonists>

## Summary

Uses Symphony's core email API to send emails via Emailmanager (http://emailmanager.com). It requires a Emailmanager account and API key.

Please note that at the time of writing Emailmanager does not allow bulk marketing emails.

## Installation

Information about [installing and updating extensions](http://symphony-cms.com/learn/tasks/view/install-an-extension/) can be found in the Symphony documentation at <http://symphony-cms.com/learn/>.

### Via Git

The extension includes Markus Hedlund's Emailmanager PHP class as a submodule. If installing via Git, be sure to do a resursive clone or initialize and update submodules after cloning.

## Usage

Once installed, go to System > Preferences and fill in your Emailmanager credentials. Under "Email Gateway" choose "Emailmanager" to use this extension as your default email gateway.

## Credits

This Symphony extension makes use of the Emailmanager PHP class by Markus Hedlund, which can be found here: <https://github.com/Znarkus/emailmanager-php>

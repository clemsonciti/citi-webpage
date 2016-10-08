#!/bin/bash 


CITIPASS=x
duck --password $CITIPASS --upload davs://$CITIUSER@citi-edit.sites.clemson.edu/ _site/ --existing overwrite -v

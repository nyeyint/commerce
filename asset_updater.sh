#!/bin/bash

for i in storage/app/public/*
    do
        dir=`basename $i`
        echo "Removing ./public/$dir directory...."
        rm -rf ./public/$dir
        echo "Copying $i to ./public/$dir.."
        cp -R $i ./public/$dir
    done
echo "Done!"

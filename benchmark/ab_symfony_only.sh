#!/bin/bash

echo
echo ==================================================
echo Generating Symfony cache :
wget http://docker.demo-varnish:8000/working/duration

echo
echo ==================================================
echo Wait a little
sleep 5

echo
echo ==================================================
echo Begin the benchmark

ab -t 25 -c 5 http://docker.demo-varnish:8000/working/duration

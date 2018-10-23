#!/bin/bash

echo
echo ==================================================
echo Generating Varnish cache :
wget http://docker.demo-varnish/working/duration

echo
echo ==================================================
echo Wait a little
sleep 5

echo
echo ==================================================
echo Begin the benchmark

ab -t 25 -c 5 http://docker.demo-varnish/working/duration

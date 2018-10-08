#!/bin/sh
#编译路径
php ../php-protobuf-extend/protoc-gen-php.php  pack.proto
#protoc pack.proto --cpp_out=./
#g++ main.cpp msg.h msg.cpp pack.pb.cc -o main `pkg-config --cflags --libs protobuf` -lpthread



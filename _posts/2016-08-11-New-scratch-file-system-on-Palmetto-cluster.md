---
layout: post
title: New scratch file systems available on Palmetto cluster
abstract: 
author: Marcin Ziolkowski
---

New scratch system based on XFS has been put into
service and is available under `/scratch3`. Every user
has a personal directory on `/scratch3`. The `/scratch3`
file system is not backed up and all files not accessed
for last 30 days will be removed daily.

We have also installed small very fast scratch system
which is available under `/fast_scratch`. This system is based
on XFS and SSD disks and has much smaller capacity.
Due to the capacity, `/fast_scratch` will be available per
project after CU-CAT approval.

The available scratch systems on Palmetto are:

`/local_scratch` - local temporary space on each compute
node, capacity varies per phase of Palmetto

`/scratch1` - OrangeFS based parallel scratch system, 233TB
capacity

`/scratch2` - ZFS based scratch system, 160TB capacity

`/scratch3` - XFS based scratch system, 129TB capacity

`/fast_scratch` - XFS SSD based scratch system, 8.5TB capacity

To choose the most appropriate scratch file system for your
application, we recommend running benchmark to test the
I/O performance on `/local_scratch`, `/scratch1`, `/scratch2` and
`/scratch3`.

`/scratch1` will be most appropriate for applications using parallel
I/O. If your application uses small I/O and not utilizes parallel
I/O, it may be more efficient to use `/local_scratch`, `/scratch2` or
`/scratch3`.

If you need any help in determining the most appropriate
scratch file system for your application please contact
<ithelp@clemson.edu>.


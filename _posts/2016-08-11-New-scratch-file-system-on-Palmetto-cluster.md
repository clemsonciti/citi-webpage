---
layout: post
title: New scratch file systems available on Palmetto cluster
abstract: "New scratch system based on XFS has been put into service on Palmetto cluster and is available under <code>/scratch3</code>." 
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

Location | Capacity | Description 
---------|----------|-------------- 
`/local_scratch` | varies by phase | local temporary space on each compute node
`/scratch1`      | 233 TB | OrangeFS based parallel scratch system
`/scratch2`      | 160 TB | global ZFS based scratch system
`/scratch3`      | 129 TB | global XFS based scratch system
`/fast_scratch`  | 8.5 TB | global XFS SSD based scratch system

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


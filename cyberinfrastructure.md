---
layout: page
title: Clemson Research Cyberinfrastructure
permalink: /infrastructure/
---

<div class="row" style="margin-top: 10pt;">
  <a class="button" href="#palmetto">Palmetto Cluster</a>
  <a class="button" href="#security">PHI data processing</a>
  <a class="button" href="#storage">Long Term Storage</a>
  <a class="button" href="#cypress">Cypress Cluster</a>
  <a class="button" href="#galaxygis">GalaxyGIS</a>
  <a class="button" href="#viz">Visualization Lab</a>
  <a class="button" href="#network">Network</a>
  <a class="button" href="#osg">Open Science Grid</a>
  <a class="button" href="#xsede">XSEDE</a>
  <a class="button" href="#citi">Research support</a>
  <a class="button" href="#prices">Prices</a>
</div>

<span id="palmetto"></span>

## Palmetto Cluster

Palmetto Cluster is a local high performance computing environment
available to all Clemson students/faculty and staff as a dedicated
research environment.

### Overview

- available to all Clemson students/faculty/staff for free
- 2021 compute nodes, 23072 cores
- heterogeneous configuration with various types of nodes (different CPU, memory, network, disk space)
- 386 nodes are equipped with NVIDIA Tesla GPUs: 280 nodes with NVIDIA K20 GPUs (2 per node), 106 nodes with NVIDIA K40 GPUs (2 per node)
- 4 nodes with Intel Phi co-processors (2 per node)
- 6 large memory nodes (5 with 505GB, 1 with 2TB), 262 nodes with 128GB of memory
- 100GB of personal space (backed up daily for 42 days)
- Myrinet, 10Gbps Ethernet, Infiniband networks
- global and local scratch spaces for temporary files (no quota per user)
- maximum run time for a single task limited to 72 hours on Infiniband part and 168 hours on Myrinet part
- ranked 4th among the public academic institutions in the US on Top500 list (155 on Top500) with
performance of 814.4 TFlops (17,372 cores from Infiniband part of Palmetto)

[More about Palmetto](https://www.palmetto.clemson.edu/palmetto/) <br>
[New account on Palmetto](http://citi.sites.clemson.edu/new-account) <br>
[Reservation request](http://citi.sites.clemson.edu/new-reservation) <br>



### Condominium model

Palmetto cluster operates in a condominium model which allows faculty to invest in the
cluster. Investments into Palmetto are based on purchases of compute nodes. By purchasing
a compute node faculty get priority to use an equivalent hardware across whole Palmetto cluster.
All not used compute cycles are made available for general Clemson users. Owners may preempt
other users making the hardware they purchased immediately available. Purchased nodes are
available to faculty for a period of 4 years, after that the priority to use them expires.

Being an owner allows users to

- have immediate access to the amount they have purchased by preempting other users
- have a dedicated group on Palmetto cluster
- invite external collaborators (not associated with Clemson) to use their purchased
resources
- have extended maximum time for a single task up to 336 hours (14 days)

For more information about condominium model and purchasing Palmetto nodes,
including Palmetto nodes on grants please contact Jeronica Williams <jeronic@clemson.edu>
or Marcin Ziolkowski <zziolko@clemson.edu>.

[Owners guide for Palmetto cluster](https://www.palmetto.clemson.edu/palmetto/pages/ownership/owners.html)

### Temporary storage

Palmetto includes several file systems designed for storing temporary files
1. Local disk on compute nodes
2. Following global scratch systems  

File system      | Directory     | Capacity  | Features
-----------------|---------------|-----------|----------------
OrangeFS         | `/scratch1`   | 233 TB    | - distributed file system based on OrangeFS <br> - available to all compute nodes and the login node <br> - no quota per user <br> - files not accessed for 30 days deleted on first day of each month <br> - designed for parallel I/O
ZFS              | `/scratch2`   | 150 TB    | - single server sharing space to all compute nodes and the login node <br> - no quota per user <br> - files not accessed for 30 days deleted daily <br> - designed for general I/O patterns (small and/or single process I/O) 
XFS              | `/scratch3`   | 129 TB    | - single server sharing space to all compute nodes and the login node <br> - no quota per user <br> - files not accessed for 30 days deleted daily <br> - designed for general I/O patterns (small and/or single process I/O)

<hr>

<span id="security"></span>

## Secure data server

CCIT hosts server dedicated to preparing sensitive data for further use on 
either Palmetto or Cypress clusters. This system is meant to be used for 
de-identification of any Protected Health Information (HIPAA) for further 
analysis. The following identifiers combined with medical information qualify 
any data as sensitive 

- Names
- Telephone numbers
- Fax numbers
- Email addresses
- Social Security numbers
- Medical record numbers
- Health plan numbers
- License plate numbers
- URLs
- Full-face photographic images
- Any other unique identifying marker that allows identification of an individual 

The system dedicated to the initial processing of the sensitive information
is equipped with tools enhancing its security and the processes (access, monitoring,
audit, administration) involving this system are detached from the general once 
for Palmetto or Cypress. 

Security measures for the PHI research system
- Secure location with 24/7 monitoring of access
- Access to the system is limitted to restricted list of users 
- Access to restricted list of IP addresses controlled both at network and firewall levels
- Secure shell only access 
- Two-factor authentication
- Monitoring of all commands on the system
- Encrypted file system
- Periodic security audit

For access to the secured research system please contact 
<a href="#acds_support">Advanced Computing and Data Science group</a>.


[HIPAA](https://www.hhs.gov/hipaa/index.html)

<hr>

<span id="storage"></span>

## Long term storage

Long term storage solutions are available to users seeking a dedicated
high performance storage. This service is provided for fee to Clemson users.
Palmetto users may purchase ZFS storage with either dedicated server (purchasing of 150TB)
or shared server (purchase in 1TB increments).

Long term storage space includes snapshots of changes and mirror system
for disaster recovery.

[More information about long term storage](https://www.palmetto.clemson.edu/palmetto/pages/ownership/owners.html#storage)

<hr>

<span id="cypress"></span>

## Cypress Cluster

Clemson cyberinfrastructure includes a dedicated *Hadoop* environment, called *Cypress*, that is integrated with Palmetto's infrastructure. The *Cypress Cluster* uses the *Hortonworks Data Platform*
distribution of Hadoop and *Spark* to support data intensive computing and analytics. Cypress is available to
all students, faculty, and staff with Palmetto Cluster accounts.

### Overview

- available for free to all Clemson students, faculty, and staff
- 3.64 PB (petabyte) global *Hadoop Distributed File System* (HDFS)
- 40 *worker* nodes (responsible for computation and data storage)
  - 256 GB of RAM per node
  - 16 nodes each have 12 1-TB local disks
  - 24 nodes each have 24 6-TB local disks
- one dedicated Cypress Cluster *user node* for job submission and data staging
- *Hortonworks Data Platform distribution* of Hadoop, Spark, and other *Hadoop ecosystem services*

For more information about investing into Cypress Cluster please
contact Jeronica Williams <jeronic@clemson.edu> or Linh Ngo <lngo@clemson.edu>.

[More about Cypress](https://www.palmetto.clemson.edu/cypress/)

<hr>

<span id="acds_support"></span>

## Support

The Palmetto and Cypress Clusters research support is provided by Advanced Computing
and Data Science group:

- Jeffrey Denton <denton@clemson.edu>
- Linh Ngo <lngo@clemson.edu>
- Ashwin Srinath <atrikut@g.clemson.edu>
- Nuyun Zhang <nuyun@clemson.edu>
- Marcin Ziolkowski <zziolko@clemson.edu>

<hr>

<span id="galaxygis"></span>

## GalaxyGIS Cluster

Clemson Center for Geospatial Technologies (CCGT) cyberinfrastructure includes a 
High Throughput Computing pool, called GalaxyGIS, to address the needs of desktop 
GIS users who needs additional computational power for their GIS analysis. The GIS Cluster 
consists of over 30 Windows computers with installed GIS programs and a scheduler 
to distribute GIS jobs for parallel processing through available nodes. GalaxyGIS 
is available to all students, faculty, and staff with Palmetto Cluster accounts.

### Overview

- available for free to all Clemson students, faculty, and staff
- 740 computer nodes (responsible for processing and computation)
- 1 TB of personal space (not backed up)

### Support

GalaxyGIS Cluster support is provided by the GIS group

- Patrick Claflin <pat@clemson.edu>
- Palak Matta <pmatta@clemson.edu>
- Blake Lytle <balytle@g.clemson.edu>
- Patricia Carbajales-Dale <pcarbaj@clemson.edu>

<hr>


<span id="osg"></span>

### Open Science Grid

Open Science Grid (OSG) is a freely accessible distributed computing
resource for scientific calculations designed to handle huge number of "small"
computational tasks - high throughput computing (HTC).

Clemson University has been working with OSG on providing seamless access to
the OSG resources for Clemson researchers. OSG has been recently integrated
into the Palmetto cluster for sending and receiving high throughput jobs using
the OSG framework. Access to OSG is free of charge.

Access to OSG from Palmetto is available using Connect Client software.
OSG uses separate accounting system and before trying it Clemson users need to
request an OSG account.

[Open Science Grid](http://www.opensciencegrid.org/) <br>
[OSG Connect](https://osgconnect.net/) <br>
[New OSG Account](https://osgconnect.net/signup) <br>

<hr>

<span id="xsede"></span>

### XSEDE resources

The Extreme Science and Engineering Discovery Environment (XSEDE) is a collection
of national advanced cyberinfrastructure resources. XSEDE provide access to both
dedicated computing systems and experts is computationally oriented research areas.
Computing resources include Stampede, Comet, SuperMIC, Jetstream, Wrangler, Bridges
and other systems.

For more information about XSEDE resources contact one of the XSEDE Campus Champions
at Clemson University:

- Xizhou Feng <xizhouf@clemson.edu>
- Linh Ngo <lngo@clemson.edu>
- Ashwin Srinath <atrikut@clemson.edu>
- Marcin Ziolkowski <zziolko@clemson.edu>

[XSEDE](https://www.xsede.org/) <br>
[List of XSEDE resources](https://www.xsede.org/web/guest/resources/overview) <br>
[XSEDE Allocations](https://www.xsede.org/allocations) <br>

<hr>

<span id="viz"></span>

### Visualization Lab

The Visualization Lab (Barre Hall 2004) provides
cyberinfrastructure for the visualization and virtual reality needs
of Clemson students, faculty and staff, including:

- Virtual reality head mounted displays (Oculus Rift, Microsoft HoloLens, Samsun Gear VR, etc.,)
- Visualization workstations equipped with high-end Nvidia Graphics cards
- Tiled displays and 3-D projector
- Visualization cluster with 5 nodes and 40 Gbps connection to Palmetto Cluster

For details about available resources, please see [here](http://visualization.sites.clemson.edu/systems.html),
or contact Wole Oyekoya <ooyekoy@clemson.edu>.
For events, demos, and office hours, please see the [visualization calendar](http://visualization.sites.clemson.edu/news.html).

<hr>

<span id="network"></span>

## Network

Clemson network infrastructure is connected with high speed network provided by
Internet 2. The high speed (100Gbps) network provides external connectivity to
Palmetto cluster and main campus (selected buildings).

#### Data transfer node (DTN)

Palmetto infrastructure includes two servers dedicated to fast transfer of data.

- `xfer01-ext.palmetto.clemson.edu` is node dedicated to large file transfers using
traditional tools like scp, FileZilla. This server also hosts Globus Endpoint for 
Palmetto cluster. Palmetto `/home` and all scratch file systems are available on this 
server.  

- `hpcdtn01-ext.clemson.edu` is a server dedicated to large file transfer using Internet2.
This DTN is part of Pacific Research Platform and includes large SSD based file system
to facilitate best disk-to-disk transfer speed.  

#### Pacific Research Platform (PRP)

Pacific Research Platform is a collaboration of universities to establish 
fast network connections between servers dedicated to data transfer. Clemson 
University is PRP partner and `hpcdtn01-ext.clemson.edu` is part of the 
PRP network. The list of all participating institutions and their DTNs is
available on PRP Dashboard which allows also for assessment of the connection
speed between different sites. 

[PRP Dashboard](http://prp-maddash.calit2.optiputer.net/maddash-webui/)<br>
[Pacific Research Platform](http://prp.ucsd.edu/)<br>
[Internet 2](http://www.internet2.edu) <br>
[Advanced Layer 2 Service](http://www.internet2.edu/products-services/advanced-networking/layer-2-services/) <br>
[ESnet Fasterdata Knowledge Base](https://fasterdata.es.net/)

<hr>

<span id="citi"></span>

### Research support

Cyberinfrastructure Technology Integration (CITI) group provides support to Clemson
University researchers in broadly defined research computing. CITI provides workshops
covering introduction to HPC systems, introduction to programming for researchers and
area specific research computing. CITI staff provides assistance in utilizing local
and external dedicated computing resources and assists in porting and optimizing workflows.

CITI group includes subgroups

Advanced Computing and Data Science  

- Jeffrey Denton <denton@clemson.edu>
- Linh Ngo <lngo@clemson.edu>
- Ashwin Srinath <atrikut@g.clemson.edu>
- Nuyun (Nellie) Zhang <nuyun@clemson.edu>
- Marcin Ziolkowski <zziolko@clemson.edu>

Advanced Visualization

- Wole Oyekoya <ooyekoy@clemson.edu>
- Jonathan Clayton <jclayto@clemson.edu>

Geographic Information System Group

- Patrick Claflin <pat@clemson.edu>
- Patricia Carbajales-Dale <pcarbaj@clemson.edu>
- Palak Matta <pmatta@clemson.edu>
- Blake Lytle <balytle@clemson.edu>

Program Manager

- Jeronica Williams <jeronic@clemson.edu>

[More about CITI group](http://citi.clemson.edu) <br>
[CITI Training and workshops](http://citi.clemson.edu/training) <br>

<hr>

<span id="prices"></span>

### Prices

All prices cover 4 year term.

Type | Unit | Description | Price | Comments
-----|------|-------------|-------|-----------------
Storage | 1TB | - ZFS system available only to Palmetto cluster<br> - Snapshots included in user space <br> - Full mirror for system recovery | $150.00 | Owners of existing SAMQFS spaces may expand existing storage for the same price as ZFS storage
Palmetto compute node | 1 unit | - 2 x Intel Xeon E5-2680v3 "Haswell" @2.5 GHz (for a total of 24 cores) <br> - 2 x NVIDIA Tesla K40c GPU accelerators <br> - 128 GB DDR4 RAM <br> - 2 x 1 TB local hard drives <br> - On-board 10 Gbps Ethernet NIC <br> - InfiniBand FDR 56 Gbps network card | $6250.00 | All grant budgets should assume $8000 price as a projected price for future expansions of Palmetto

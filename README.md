IPv4 addresses surrounded by whitespace have their rDNS information added to them. For example:
traceroute -n yahoo.com
...
 9  216.115.100.31  74.505 ms  74.556 ms 216.115.100.25  72.173 ms
10  98.139.129.175  72.890 ms 98.139.232.93  73.782 ms 98.139.130.11  71.325 ms
11  72.30.22.11  77.013 ms 72.30.22.47  73.345 ms 72.30.22.7  72.201 ms
12  98.139.129.177  74.935 ms 98.139.129.161  73.633 ms 98.139.129.179  74.715 ms


is turned into 

...
9 216.115.100.31 ae-3.msr2.bf1.yahoo.com 74.505 ms 74.556 ms 216.115.100.25 ae-4.msr1.bf1.yahoo.com 72.173 ms 
10 98.139.129.175 UNKNOWN-98-139-129-X.yahoo.com 72.890 ms 98.139.232.93 xe-1-0-1.clr1-a-gdc.bf1.yahoo.com 73.782 ms 98.139.130.11 xe-2-3-1.clr1-a-gdc.bf1.yahoo.com 71.325 ms 
11 72.30.22.11 UNKNOWN-72-30-22-X.yahoo.com 77.013 ms 72.30.22.47 UNKNOWN-72-30-22-X.yahoo.com 73.345 ms 72.30.22.7 UNKNOWN-72-30-22-X.yahoo.com 72.201 ms 
12 98.139.129.177 po-11.bas1-7-prd.bf1.yahoo.com 74.935 ms 98.139.129.161 po-10.bas1-7-prd.bf1.yahoo.com 73.633 ms 98.139.129.179 po-11.bas2-7-prd.bf1.yahoo.com 74.715 ms


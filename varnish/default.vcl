vcl 4.0;
# Based on: https://github.com/mattiasgeniar/varnish-6.0-configuration-templates/blob/master/default.vcl

import std;
import directors;

backend server1 { # Define one backend
  .host = "nginx";          # IP or Hostname of backend
  .port = "81";           # Port Apache or whatever is listening
}

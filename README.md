# How check result
- checkout repo
- run docker compose
- in your hosts add "0.0.0.0 docker.local" 
- go to http://docker.local:8099
- see result
- run php unit test

# See
- apache.conf (full ready) - way of my thinks and result.
- test (only few tests):
    - Lib/CreateObject/CreateObjectBaseTest as example for easy check and remember:
        - what class has changed namespace (specially or accidentally(!))
    - main - only for verify success result.
    


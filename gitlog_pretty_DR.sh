git log --graph --abbrev-commit --pretty --date=format:+%Y-%m-%d-%H:%M:%S | sed 's%of https://github.com/rdanf1/web-platform-stackblitz_static%%' | sed 's/<.*//' > gitlog_$(date +%Y-%m-%d_%H:%M:%S).txt
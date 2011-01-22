#!bash
#
# bash completion support for symfony2 console
#
# Copyright (C) 2010 Matthieu Bontemps <matthieu@knplabs.com>
# Distributed under the GNU General Public License, version 2.0.

_console() 
{
    local cur prev opts cmd
    COMPREPLY=()
    cur="${COMP_WORDS[COMP_CWORD]}"
    prev="${COMP_WORDS[COMP_CWORD-1]}"
    cmd="${COMP_WORDS[0]}"

    # Launch the console:autocomplete command.
    opts=$(${cmd} console:autocomplete)
    if [[ ${COMP_CWORD} = 1 ]] ; then
        COMPREPLY=( $(compgen -W "${opts}" -- ${cur}) )
        return 0
    fi
    if [[ ${COMP_CWORD} = 2 ]] ; then
        case "${prev}" in
            help)
                COMPREPLY=( $(compgen -W "${opts}" -- ${cur}) )
                return 0
                ;;
            *)
                ;;
        esac
    fi
    if [[ ${COMP_CWORD} > 1 ]] ; then
        case "${cur}" in
            --*)
                COMPREPLY=( $(compgen -W "$(${cmd} console:autocomplete ${COMP_WORDS[1]})" -- ${cur}) )
                return 0
                ;;
            *)
                ;;
        esac
    fi

    COMPREPLY=( $(compgen -f ${cur}) )
    return 0
}
complete -F _console console 
complete -F _console console-dev
complete -F _console console-test
complete -F _console console-prod
complete -F _console console-staging
complete -F _console Symfony
COMP_WORDBREAKS=${COMP_WORDBREAKS//:}
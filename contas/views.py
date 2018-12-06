from django.shortcuts import render
from django.shortcuts import render, redirect
from django.contrib.auth.decorators import login_required
from django.contrib.auth.forms import UserCreationForm

from .forms import CadastroForm


def cadastro(request):
    template_name = 'cadastro.html'
    if( request.method == 'POST'):
        formCadastro = CadastroForm(request.POST)
        if formCadastro.is_valid():
            formCadastro.save()
            return redirect('login')
    else:
        formCadastro = CadastroForm
    context = {
        'formCadastro': formCadastro
    }

    return render(request, template_name, context)


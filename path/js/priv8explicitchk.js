function notifyMe(_0x6463x2, _0x6463x3, _0x6463x4) {
    if (!('Notification' in window)) {
        alert('This browser does not support desktop notification')
    } else {
        if (Notification['permission'] === 'granted') {
            var _0x6463x5 = {
                body: _0x6463x2,
                icon: 'path/images/logo.png',
                dir: 'auto'
            };
            var _0x6463x6 = new Notification('[ExplicitChecker] ' + _0x6463x3, _0x6463x5)
        } else {
            if (Notification['permission'] !== 'denied') {
                Notification['requestPermission'](function(_0x6463x7) {
                    if (!('permission' in Notification)) {
                        Notification['permission'] = _0x6463x7
                    };
                    if (_0x6463x7 === 'granted') {
                        var _0x6463x5 = {
                            body: _0x6463x4,
                            icon: 'path/images/logo.png',
                            dir: 'auto'
                        };
                        var _0x6463x6 = new Notification('[ExplicitChecker by Shawn e Astrubou Anti-Kibagem 8)] ' + _0x6463x3, _0x6463x5)
                    }
                })
            }
        }
    }
}
var audio = new Audio('path/sound/blop.mp3');
var audio2 = new Audio('path/sound/bot.mp3');

function limpar() {
    var _0x6463xb = $('#ccs')['val']();
    if (_0x6463xb['length'] == 0) {
        document['getElementById']('demo')['innerHTML'] = '<div class="label label-warning label-dismissible">Carregue a lista antes de limpa-la!</div>';
        notifyMe('N\xF3s n\xE3o consiguimos limpar algo que j\xE1 est\xE1 limpo!', 'Erro a limpar a lista de checagem.');
        audio2['play']();
        return
    } else {
        document['getElementById']('ccs')['value'] = '';
        document['getElementById']('demo')['innerHTML'] = '<div class="label label-warning label-dismissible">Lista limpa.</div>';
        audio['play']();
        notifyMe('Todas as ccs que estavam na sua lista foram limpas!', 'Lista limpa.')
    }
}

function rmLinha(_0x6463xd) {
    var _0x6463xe = $(_0x6463xd)['val']()['split']('\x0A');
    _0x6463xe['splice'](0, 1);
    $(_0x6463xd)['val'](_0x6463xe['join']('\x0A'))
}

function start() {
    var _0x6463xb = $('#ccs')['val']();
    if (_0x6463xb['length'] == 0) {
        document['getElementById']('demo')['innerHTML'] = '<div class="label label-warning label-dismissible">Carregue a lista!</div>';
        notifyMe('Voc\xEA precisa carregar uma lista antes de iniciar o testador!', 'Erro ao iniciar.');
        audio2['play']();
        return
    } else {
        document['getElementById']('demo')['innerHTML'] = '<div class="label label-warning label-dismissible">Initiated</div>';
        audio['play']();
        notifyMe('Suas lista para checagem das cc\'s foi enviada com sucesso, estamos iniciando o testador!', 'Initiated tests.')
    };
    var _0x6463x10;
    var _0x6463xb = $('#ccs')['val']();
    var _0x6463x11 = _0x6463xb['split']('\x0A');
    var _0x6463x12 = $('#separador')['val']();
    for (_0x6463x10 = 0; _0x6463x10 < _0x6463x11['length']; _0x6463x10++) {
        var _0x6463x13 = _0x6463x11[_0x6463x10];
        var _0x6463xd = _0x6463x10;
        check(_0x6463x13, _0x6463x12, _0x6463xd)
    };

    function _0x6463x14() {
        document['getElementById']('demo')['innerHTML'] = '<div class="label label-warning label-dismissible">Carregue a lista!</div>';
        notifyMe('Voc\xEA precisa carregar uma lista antes de iniciar o testador!', 'Erro ao iniciar.');
        audio2['play']()
    }
    var _0x6463x15 = document['getElementById']('ccs')['value'];
    var _0x6463x16 = _0x6463x15['split']('\x0A');
    var _0x6463x17 = count(_0x6463x16, 'COUNT_RECURSIVE');
    var _0x6463x18 = _0x6463x15;
    var _0x6463x19 = listToArray(_0x6463x18, '\x0A');
    document['getElementById']('carregada')['innerHTML'] = _0x6463x17;
    for (var _0x6463x10 = 0; _0x6463x10 < _0x6463x17; _0x6463x10++) {
        var _0x6463x1a = _0x6463x19[_0x6463x10];
        var _0x6463x1b = _0x6463x1a['split']('|');
        var _0x6463x1c = 'csid_' + _0x6463x10;
        var _0x6463x1d = 'ccid_' + _0x6463x10;
        var _0x6463x1e = document['getElementById']('ccs')['value'];
        var _0x6463x1f = _0x6463xb['split']('\x0A');
        for (var _0x6463x10 = _0x6463x1f['length']; _0x6463x10 < 0; _0x6463x10++) {
            var _0x6463x20 = _0x6463x1f[_0x6463x10]['split']('|')
        };
        _0x6463x1e = _0x6463x1e['replace'](_0x6463x1a, '');
        _0x6463x1e = _0x6463x1e['replace']('\x0A', '');
        document['getElementById']('ccs')['innerHTML'] = _0x6463x1e
    }
}

function check(_0x6463x13, _0x6463x12, _0x6463xd) {

	// console.log(_0x6463x13);
	// console.log(_0x6463x12);
	// console.log(_0x6463xd);

    setTimeout(function() {
        $['ajax']({
            type: 'GET',
            url: 'path/function/priv8api.php',
            dataType: 'html',
            data: {
                "\x74\x65\x73\x74\x61\x72": 'cc',
                "\x63\x63\x73": _0x6463x13,
                "\x73\x65\x70\x61\x72\x61\x64\x6F\x72": _0x6463x12
            },
            success: function(_0x6463x22) {
                document['getElementById']('testado')['innerHTML'] = (eval(document['getElementById']('testado')['innerHTML']) + 1);
                if (_0x6463x22['indexOf']('Approved') > 0) {
                    document['getElementById']('CLIVE')['innerHTML'] = (eval(document['getElementById']('CLIVE')['innerHTML']) + 1);
                    $('#aprovadas')['append'](_0x6463x22);
                    rmLinha('#ccs');
                    notifyMe('Voc\xEA tem mais 1 info aprovada.', 'Transa\xE7\xE3o autorizada com sucesso!');
                    audio['play']();
                    document['getElementById']('demo')['innerHTML'] = '<div class="label label-success label-dismissible">Approved.</div>';
                    setTimeout(function() {
                        document['getElementById']('demo')['innerHTML'] = '<div class="label label-warning label-dismissible">Testing.</div>'
                    }, 500);
                    setTimeout(function() {
                        document['getElementById']('demo')['innerHTML'] = '<div class="label label-warning label-dismissible">Testing..</div>'
                    }, 750);
                    setTimeout(function() {
                        document['getElementById']('demo')['innerHTML'] = '<div class="label label-warning label-dismissible">Testing...</div>'
                    }, 1000);
                    console['log']('{"Success":"', document['getElementById']('testado')['innerHTML'], '":"true"}')
                } else {
                    $('#reprovadas')['append'](_0x6463x22);
                    rmLinha('#ccs');
                    document['getElementById']('CDIE')['innerHTML'] = (eval(document['getElementById']('CDIE')['innerHTML']) + 1);
                    document['getElementById']('demo')['innerHTML'] = '<div class="label label-danger label-dismissible">Rejected.</div>';
                    setTimeout(function() {
                        document['getElementById']('demo')['innerHTML'] = '<div class="label label-warning label-dismissible">Testing.</div>'
                    }, 500);
                    setTimeout(function() {
                        document['getElementById']('demo')['innerHTML'] = '<div class="label label-warning label-dismissible">Testing..</div>'
                    }, 750);
                    setTimeout(function() {
                        document['getElementById']('demo')['innerHTML'] = '<div class="label label-warning label-dismissible">Testing...</div>'
                    }, 1000);
                    console['log']('{"Success":"', document['getElementById']('testado')['innerHTML'], '":"false"}')
                }
            }
        })
    }, _0x6463xd * 10000)
}

function SelectAll(_0x6463xd) {
    document['getElementById'](_0x6463xd)['focus']();
    document['getElementById'](_0x6463xd)['select']()
}

function listToArray(_0x6463x25, _0x6463x26) {
    var _0x6463x27 = [];
    if (_0x6463x25 !== undefined) {
        if (_0x6463x25['indexOf'](_0x6463x26) == -1) {
            _0x6463x27['push'](_0x6463x25)
        } else {
            _0x6463x27 = _0x6463x25['split'](_0x6463x26)
        }
    };
    return _0x6463x27
}

function count(_0x6463x29, _0x6463x2a) {
    var _0x6463x2b, _0x6463x2c = 0;
    if (_0x6463x29 === null || typeof _0x6463x29 === 'undefined') {
        return 0
    } else {
        if (_0x6463x29['constructor'] !== Array && _0x6463x29['constructor'] !== Object) {
            return 1
        }
    };
    if (_0x6463x2a === 'COUNT_RECURSIVE') {
        _0x6463x2a = 1
    };
    if (_0x6463x2a != 1) {
        _0x6463x2a = 0
    };
    for (_0x6463x2b in _0x6463x29) {
        if (_0x6463x29['hasOwnProperty'](_0x6463x2b)) {
            _0x6463x2c++;
            if (_0x6463x2a == 1 && _0x6463x29[_0x6463x2b] && (_0x6463x29[_0x6463x2b]['constructor'] === Array || _0x6463x29[_0x6463x2b]['constructor'] === Object)) {
                _0x6463x2c += this['count'](_0x6463x29[_0x6463x2b], 1)
            }
        }
    };
    return _0x6463x2c
}

function pushcsB(_0x6463x2e, _0x6463x2f) {
    document['getElementById'](_0x6463x2f)['innerHTML'] = document['getElementById'](_0x6463x2f)['innerHTML'] + _0x6463x2e + '\x0A<br>'
}

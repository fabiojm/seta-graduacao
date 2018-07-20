<div class="row">
        <div class="col-md-6">
            
            <div class="box box-primary">
                <div class="box-header">
                    <h2 class="box-title">{{ $title }}
                        @if (isset($edital->anoReferencia))
                            - {{ $edital->anoReferencia}}
                        @endif
                    </h2>
                </div>
                <div class="box-body">
                    @if (!isset($edital->anoReferencia))
                        <div class="form-group">
                            <label>Ano Referência:</label>
                            <div class="input-group date">
                                <input class="form-control pull-right" name="anoReferencia" type="text" maxlength="4">
                            </div>
                        </div>
                    @endif

                    <div class="form-group">
                        <label>Período de Inscrição</label>                        
                        <div class="row">
                            <div class="form-group col-md-3">
                                Data Inicial:
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control" name="dtInicialInscricao" id="dtInicialInscricao" type="date" 
                                           value="{{ $edital->dtInicialInscricao or old('dtInicialInscricao') }}">
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="form-group col-md-3">
                                Data Final:
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control" name="dtFinalInscricao" id="dtFinalInscricao" type="date"
                                           value="{{ $edital->dtFinalInscricao or old('dtFinalInscricao') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Data de Publicação da Seleção de Orientandos</label>                        
                        <div class="row">
                            <div class="form-group col-md-3">
                                Data:
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control" name="dtPublicacaoResultados" id="dtPublicacaoResultados" type="date"
                                           value="{{ $edital->dtPublicacaoResultados or old('dtPublicacaoResultados')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Período para entrega do Relatorio Parcial</label>                        
                        <div class="row">
                            <div class="form-group col-md-3">
                                Data Inicial:
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control" name="dtInicialRelatorio" id="dtInicialRelatorio" type="date"
                                           value="{{ $edital->dtInicialRelatorio or old('dtInicialRelatorio')}}">
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="form-group col-md-3">
                                Data Final:
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control" name="dtFinalRelatorio" id="dtFinalRelatorio" type="date"
                                           value="{{ $edital->dtFinalRelatorio or old('dtFinalRelatorio') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Período para entrega do TCC</label>                        
                        <div class="row">
                            <div class="form-group col-md-3">
                                Data Inicial:
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control" name="dtInicialTCC" id="dtInicialTCC" type="date"
                                           value="{{ $edital->dtInicialTCC or old('dtInicialTCC') }}">
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="form-group col-md-3">
                                Data Final:
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control" name="dtFinalTCC" id="dtFinalTCC" type="date"
                                           value="{{ $edital->dtFinalTCC or old('dtFinalTCC')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Período para Inscrição da Banca</label>                        
                        <div class="row">
                            <div class="form-group col-md-3">
                                Data Inicial:
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control" name="dtInicialInscricaoBanca" id="dtInicialInscricaoBanca" type="date"
                                           value="{{ $edital->dtInicialInscricaoBanca or old('dtInicialInscricaoBanca')}}">
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="form-group col-md-3">
                                Data Final:
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control" name="dtFinalInscricaoBanca" id="dtFinalInscricaoBanca" type="date"
                                           value="{{ $edital->dtFinalInscricaoBanca or old('dtFinalInscricaoBanca')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Período para Agendamento da Apresentação do TCC</label>                        
                        <div class="row">
                            <div class="form-group col-md-3">
                                Data Inicial:
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control" name="dtInicialApresentacaoTCC" id="dtInicialApresentacaoTCC" type="date"
                                           value="{{ $edital->dtInicialApresentacaoTCC or old('dtInicialApresentacaoTCC')}}">
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="form-group col-md-3">
                                Data Final:
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input class="form-control" name="dtFinalApresentacaoTCC" id="dtFinalApresentacaoTCC" type="date"
                                           value="{{ $edital->dtFinalApresentacaoTCC or old('dtFinalApresentacaoTCC')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (isset($edital->anoReferencia))
                    <div class="form-group">
                        <label>Edital Ativo: 
                            <input name="ativo" id="ativo" type="checkbox"
                                value="1" {{ ($edital->ativo) ? 'checked' : ''}} />
                        </label>                        
                    </div>
                    @endif

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Gravar</button>
                </div>
            </div>
        </div>
    </div>

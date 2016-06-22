<?php 
?>
<!-- BEGIN Seals -->
<div id="registration-seals" class="registration-fieldset">
	<h4>5. Selos Certificadores</h4>
	<p class="registration-help">Relacione os selos que serão atribuídos as entidades relacionadas a inscrição quando o inscrito for aprovado.</p>
	<div class="registration-related-agent-configuration" ng-controller="RelatedSealsController">
		<p>
			<span class="label">Agente responsável</span> <span class="registration-help">(Selos atribuídos a agentes)</span><br>
		</p>
		<div class="selos-relacionados">
			<input id="registrationSeals" type="hidden" class="js-editable" data-edit="registrationSeals">
			<div class="widget">
				<div class="selos clearfix">
					<div ng-if="!registrationSeals[0].owner" ng-click="editbox.open('set-seal-owner', $event)" class="hltip editable editable-empty" title="Adicionar selo"></div>
					<edit-box id='set-seal-owner' cancel-label="Cancelar" close-on-cancel='true'>
			            <div ng-if="seals.length > 0" class="widget">
					        <div class="selos clearfix">
					            <div ng-if="!sealRelated(seal)" class="avatar-seal" ng-repeat="seal in seals" ng-class="{pending: seal.status < 0}"  ng-click="setSeal('owner', seal)">
									<img ng-src="{{avatarUrl(seal['@files:avatar.avatarMedium'].url)}}" width="48">
									<h3><a href="{{seal.singleUrl}}" class="ng-binding">{{seal.name}}</a></h3>
					            </div>
					        </div>
					    </div>
					</edit-box>
					<div ng-if="registrationSeals[0].owner" class="avatar-seal ng-scope">
						<img ng-src="{{avatarUrl(seals[getArrIndexBySealId(registrationSeals[0].owner)]['@files:avatar.avatarMedium'].url)}}">
		                <div class="descricao-do-selo">
		                    <h1><a href="{{seals[getArrIndexBySealId(registrationSeals[0].owner)].singleUrl}}" class="ng-binding">{{seals[getArrIndexBySealId(registrationSeals[0].owner)].name}}</a></h1>
		                </div>
	            	</div>
				</div>
			</div>                        
		</div>
		<p>
			<span class="label">Instituição responsável</span> <span class="registration-help">(Selos atribuídos a instituições)</span><br>
		</p>
		<div class="selos-relacionados">
			<div class="widget">
				<div class="selos clearfix">
					<div ng-if="!registrationSeals[0].institution" ng-click="editbox.open('set-seal-institution', $event)" class="hltip editable editable-empty" title="Adicionar selo"></div>
					<edit-box id='set-seal-institution' cancel-label="Cancelar" close-on-cancel='true'>
			            <div ng-if="seals.length > 0" class="widget">
					        <div class="selos clearfix">
					            <div ng-if="!sealRelated(seal)" class="avatar-seal" ng-repeat="seal in seals" ng-class="{pending: seal.status < 0}"  ng-click="setSeal('institution', seal)">
									<img ng-src="{{avatarUrl(seal['@files:avatar.avatarMedium'].url)}}" width="48">
									<h3><a href="{{seal.singleUrl}}" class="ng-binding">{{seal.name}}</a></h3>
					            </div>
					        </div>
					    </div>
					</edit-box>
					<div ng-if="registrationSeals[0].institution" class="avatar-seal ng-scope">
						<img ng-src="{{avatarUrl(seals[getArrIndexBySealId(registrationSeals[0].institution)]['@files:avatar.avatarMedium'].url)}}">
		                <div class="descricao-do-selo">
		                    <h1><a href="{{seals[getArrIndexBySealId(registrationSeals[0].institution)].singleUrl}}" class="ng-binding">{{seals[getArrIndexBySealId(registrationSeals[0].institution)].name}}</a></h1>
		                </div>
	            	</div>
				</div>
			</div>                        
		</div>
		<p>
			<span class="label">Coletivo</span> <span class="registration-help">(Selos atribuídos a agentes coletivos)</span><br>
		</p>
		<div class="selos-relacionados">
			<div class="widget">
				<div class="selos clearfix">
					<div ng-if="!registrationSeals[0].collective" ng-click="editbox.open('set-seal-collective', $event)" class="hltip editable editable-empty" title="Adicionar selo"></div>
					<edit-box id='set-seal-collective' cancel-label="Cancelar" close-on-cancel='true'>
			            <div ng-if="seals.length > 0" class="widget">
					        <div class="selos clearfix">
					            <div ng-if="!sealRelated(seal)" class="avatar-seal" ng-repeat="seal in seals" ng-class="{pending: seal.status < 0}"  ng-click="setSeal('collective', seal)">
									<img ng-src="{{avatarUrl(seal['@files:avatar.avatarMedium'].url)}}" width="48">
									<h3><a href="{{seal.singleUrl}}" class="ng-binding">{{seal.name}}</a></h3>
					            </div>
					        </div>
					    </div>
					</edit-box>
					<div ng-if="registrationSeals[0].collective" class="avatar-seal ng-scope">
						<img ng-src="{{avatarUrl(seals[getArrIndexBySealId(registrationSeals[0].collective)]['@files:avatar.avatarMedium'].url)}}">
		                <div class="descricao-do-selo">
		                    <h1><a href="{{seals[getArrIndexBySealId(registrationSeals[0].collective)].singleUrl}}" class="ng-binding">{{seals[getArrIndexBySealId(registrationSeals[0].collective)].name}}</a></h1>
		                </div>
	            	</div>
				</div>
			</div>                        
		</div>
	</div>
</div>
<!-- END Seals -->
<!-- #registration-agent-relations -->
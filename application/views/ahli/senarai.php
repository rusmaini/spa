						<div class="page-header">
							<h1>
								Ahli
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Senarai Ahli
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						
						<div class="row">
									<div class="col-xs-12">
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										
										<div class="modal-body no-padding">
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>No. Ahli</th>
														<th>Nama</th>
														<th>No. Pekerja</th>
														<th>PTJ</th>
														<th>Jawatan</th>
														<th><i class="ace-icon fa fa-calendar bigger-110 hidden-480"></i> Daftar</th>
														
														<th class="hidden-480">Status</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
													<?php foreach($ahli as $row):?>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td><?=$row['no_ahli']?></td>
														<td><?=$row['nama']?></td>
														<td><?=$row['no_pekerja']?></td>
														<td><?=$row['ptj']?></td>
														<td><?=$row['jawatan']?></td>
														<td><?=($row['tarikh_daftar']!=0)? date('d/m/Y',strtotime($row['tarikh_daftar'])):''?></td>

														<td class="hidden-480">
															
															<?php
															switch ($row['status']) {
																case '1':
																	echo '<span class="label label-sm label-success arrowed-right">Aktif</span>';
																	break;
																case '2':
																	echo '<span class="label label-sm label-warning arrowed-right">Berhenti</span>';
																	break;
																
																default:
																	
																	break;
															}
															
															?>
														</td>

														<td width="9%">
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
													<?php endforeach;?>
													
													
												</tbody>
											</table>
										</div>
									
										<div class="modal-footer">
											<?=$links?>
										</div>
										
										
										
									</div>
								</div>
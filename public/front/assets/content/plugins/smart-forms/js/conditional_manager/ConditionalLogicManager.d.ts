declare class SfConditionalLogicManager {
    private FormBuilder;
    private PanelContainer;
    private SettingsPanel;
    private ConditionalHandlersListScreen;
    private CurrentLeft;
    private ConditionIdToSave;
    private SavedConditionList;
    private Translations;
    private SelectedHandler;
    private HandlerSteps;
    private CurrentStepIndex;
    private CurrentStep;
    constructor(formBuilder: any);
    private AddNew;
    private ClearPanelContainer;
    private GoToConditionalLogicList;
    private CreateConditionalHandlersListScreen;
    private CreateHandlerItem;
    private HandlerSelected;
    private StartHandlerConfiguration;
    private GoToNextStep;
    private AddStepButtons;
    private SaveCondition;
    private GoToRoot;
    private ConditionSelected;
    private CreateConditionListItem;
    FillSavedConditionList(): void;
    private GoToPreviousStep;
    private GoToScreen;
    private GetPanelWidth;
}
